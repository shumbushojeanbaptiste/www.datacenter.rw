<?php  

$email = htmlspecialchars($_POST['email'] ?? '');
$token = htmlspecialchars($_POST['token'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$role = htmlspecialchars($_POST['role'] ?? '');
$side_value = htmlspecialchars($_POST['side_value'] ?? '');

?>
<?php


class future_sms
{
    private static $api_id  = '';
    private static $api_key = '';
    private static $base_url = "https://sms-api.futureinnovatech.rw/v1/api";

    /* Set API credentials */
    public static function init($api_id, $api_key)
    {
        self::$api_id  = $api_id;
        self::$api_key = $api_key;
    }

    /* Send SMS */
    public static function send($sender_id, $tel, $message, $link = '')
    {
        return self::request(array(
            'ref'       => 'sms',
            'sender_id' => $sender_id,
            'tel'       => $tel,
            'message'   => $message,
            'link'      => $link
        ));
    }


    /* CURL Request Handler */
    private static function request($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => self::$base_url . '/' . self::$api_id . '/' . self::$api_key,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return array('status' => false, 'error' => $error);
        }

        curl_close($curl);
        return json_decode($response, true);
    }
}

/* ===========================
   USAGE EXAMPLES
   =========================== */

// 1️Initialize API credentials
future_sms::init(
    'FI-4829f172-174b-4f62-8ed0-07fda1f7cd7c-ID',
    'FI-53334695-6bf6-42a3-a4f1-6adc3eeea28a-KEY'
);
$sms = "Your OTP code is $token. Use it within 5 minutes to access the system. Do not share this code.";

//2️ Send SMS
$sms = future_sms::send(
    'N-SMS',
    $phone,
    $sms
);

// echo "SMS RESPONSE:\n";
// print_r($sms);

?>

<main class="d-flex w-100 h-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mb-4">
                        <h2>OTP Verification</h2>
                        <p>Enter the code sent to <strong><?= $phone ?></strong></p>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <form id="otpForm">
                                    <div class="mb-3 text-center">
                                        <!-- <label class="form-label">Your OTP:</label>
                                        <div class="otp-display" style="font-family: 'Courier New', monospace; font-size: 2rem; letter-spacing: 0.5rem; color: #007bff;">
                                            <?= $token ?>
                                        </div> -->
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Enter OTP</label>
                                        <input type="text" maxlength="6" class="form-control form-control-lg text-center" name="otp" id="otpInput" placeholder="Enter your OTP" required>
                                        <small class="text-muted">You have <span id="attemptsLeft">5</span> attempts remaining</small>
                                    </div>

                                    <input type="hidden" name="email" value="<?= $email ?>">
                                    <input type="hidden" name="token" value="<?= $token ?>">
                                    <input type="hidden" id="role" value="<?= $role ?>">
                                    <input type="hidden" id="side_value" value="<?= $side_value ?>">

                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                            <i class="fe fe-arrow-right"></i> Verify
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        Want to access? <a href='sign-on'>Sign-in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
let attempts = 3;

document.getElementById("otpForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const otpInput = document.getElementById("otpInput").value.trim();
    const token = "<?= $token ?>";
    const role = parseInt(document.getElementById("role").value);
    const side_value = parseInt(document.getElementById("side_value").value);

    if(attempts <= 0) {
       
		pop_wrong("Maximum attempts reached. Page will refresh.");
        location.reload();
        return;
    }

    if(otpInput === token) {
   
		pop_up_success("All verification was passed and fill it");

        // ✅ Redirect based on role and side_value
        if(role === 1){
            location.href = 'datacenter/index';
        }
        else if(role === 2 && side_value === 1){
            location.href = 'landlord/index';
        }
        else if(role === 2 && side_value === 2){
            location.href = 'datacenter/index';
        }
        else if(role === 3){
            location.href = 'control/index';
        }
        else if(role === 4){
            location.href = 'receiption/index';
        }
        else if(role === 5){
            location.href = 'datacenter/index';
        }
        else{
           pop_wrong("Unknown role, Cannot access.");
        }
    } else {
        attempts--;
        document.getElementById("attemptsLeft").innerText = attempts;
     
		 pop_wrong("Incorrect OTP. Please try again.");

        if(attempts === 0) {
            
			pop_wrong("You have used all attempts. Make Action To Restart.");
            //location.reload();
        }
    }
});
</script>

<style>
.otp-display {
    padding: 10px 0;
    background-color: #f1f5f9;
    border-radius: 8px;
    display: inline-block;
    width: 100%;
    text-align: center;
}
</style>
