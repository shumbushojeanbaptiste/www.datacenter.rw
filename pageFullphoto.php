<?php include 'hd2.php';?>
  <style>
  .info-img {
    width: 100%;
    max-width: 360px;
    border-radius: 10px;
  }

  /* Right-side fade animation */
  .animated-img {
    animation: slideIn 1.2s ease;
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateX(40px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  /* Fade in for sections */
  .fade-in {
    animation: fadeIn 1.5s ease;
  }

  @keyframes fadeIn {
    0% {opacity:0}
    100% {opacity:1}
  }

  /* Mobile responsive */
  @media (max-width: 768px) {
    .info-img {
      margin-top: 20px;
    }
  }
</style>

    
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center fade-in">
      <div class="col-12">
        <div class="card shadow-sm p-3">

        <!-- TITLE -->
        <div class="text-center mb-4">
          <h2 class="h3 font-weight-bold">Welcome to the Data Center Monitoring System</h2>
          <p class="text-muted">A smart, automated and secure solution for data center operators, infrastructure managers, and IT administrators.</p>
        </div>

        <!-- INTRO SECTION -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4 class="mb-3"><strong>About the System</strong></h4>
            <p class="text-muted">
              Our Data Center Monitoring Software automates infrastructure monitoring, alert management, equipment tracking,
              and resource usage monitoring (power, cooling, network).  
              It simplifies work for data center operators and provides transparency for IT administrators.
            </p>
          </div>
          <div class="col-md-5 text-center">
            <img src="images/smart-tenant-saas-pic-7.png" class="info-img animated-img">
          </div>
        </section>

        <!-- FEATURES -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4 class="mb-3"><strong>Key Features</strong></h4>
            <ul class="text-muted">
              <li>Real-time server room condition monitoring and alerts</li>
              <li>Track equipment health, power usage, and performance metrics</li>
              <li>Easy communication between operators and IT administrators</li>
              <li>Comprehensive dashboard with customizable widgets and reports</li>
              <li>Management of critical infrastructure: Power, cooling, security systems</li>
              <li>Detailed performance and capacity reports for data center managers</li>
              <li>Admin portal for monitoring system health and access logs</li>
            </ul>
          </div>
          <div class="col-md-5 text-center">
            <img src="images/statistics.png" class="info-img animated-img">
          </div>
        </section>

        <!-- HOW TO USE SYSTEM -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4 class="mb-3"><strong>How to Use the System</strong></h4>
            <ol class="text-muted">
              <li>Receive your access credentials from data center administrator.</li>
              <li>Visit the login page and enter your assigned credentials.</li>
              <li>View real-time server room status and key performance indicators.</li>
              <li>Access detailed monitoring dashboards and analytics.</li>
              <li>Receive instant alerts for critical events and anomalies.</li>
              <li>Access historical data, reports, and audit logs.</li>
            </ol>
          </div>
          <div class="col-md-5 text-center">
            <img src="images/statements.png" class="info-img animated-img">
          </div>
        </section>

        <!-- PAYMENT METHODS -->
        <section class="mb-5">
          <h4 class="mb-3"><strong>Key Monitoring Metrics</strong></h4>

          <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#p-cogeb">Environmental</a></li>
            <li class="nav-item"><a class="nav-link " data-toggle="pill" href="#p-git">Power & Energy</a></li>
            <li class="nav-item"><a class="nav-link " data-toggle="pill" href="#p-equity">Infrastructure</a></li>
            <li class="nav-item"><a class="nav-link " data-toggle="pill" href="#p-bk">Network</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#p-visa">Security</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#p-spenn">Performance</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#p-momo">Capacity</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#p-airtel">Alerts</a></li>
          </ul>

          <div class="tab-content text-muted">
            <div class="tab-pane fade show active" id="p-cogeb">
  <div class="row align-items-center">
      
      <div class="col-md-8">
        <h5><strong>Environmental Monitoring</strong></h5>
        <p>1. Monitor real-time temperature and humidity levels in server rooms.</p>
        <p>2. Set thresholds and receive instant alerts for anomalies.</p>
        <p>3. Track environmental data trends over time.</p>
        <p>4. Generate compliance reports for environmental standards.</p>
      </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
</div>

            <div class="tab-pane fade " id="p-git">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Power & Energy Monitoring</strong></h5>
              <p>1. Track power distribution and energy consumption in real-time.</p>
              <p>2. Monitor UPS status and backup power systems.</p>
              <p>3. Analyze power usage patterns and optimize efficiency.</p>
              <p>4. Generate energy reports for capacity planning.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>
            <div class="tab-pane fade " id="p-equity">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Infrastructure Systems</strong></h5>
              <p>1. Monitor critical infrastructure systems including HVAC and cooling units.</p>
              <p>2. Track backup generators and redundancy systems.</p>
              <p>3. Receive alerts for system performance degradation.</p>
              <p>4. Generate maintenance schedules based on system health.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>
            <div class="tab-pane fade " id="p-bk">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Network Monitoring</strong></h5>
              <p>1. Monitor network bandwidth and connectivity status.</p>
              <p>2. Track switch and router performance metrics.</p>
              <p>3. Identify network bottlenecks and congestion.</p>
              <p>4. Generate network utilization reports for capacity planning.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/BankofKigali-logo.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>

            <div class="tab-pane fade" id="p-visa">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Security Systems Monitoring</strong></h5>
              <p>1. Monitor access control systems and biometric readers.</p>
              <p>2. Track CCTV systems and surveillance status.</p>
              <p>3. Maintain logs of security incidents and unauthorized access attempts.</p>
              <p>4. Generate security audit reports for compliance.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>

            <div class="tab-pane fade" id="p-spenn">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Performance Analytics</strong></h5>
              <p>1. Analyze server performance trends over time.</p>
              <p>2. Identify devices approaching end-of-life or degradation.</p>
              <p>3. Calculate uptime and availability metrics.</p>
              <p>4. Generate detailed performance SLA reports.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>

            <div class="tab-pane fade" id="p-momo">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Capacity Planning</strong></h5>
              <p>1. Track power capacity utilization and headroom.</p>
              <p>2. Monitor rack space availability and density.</p>
              <p>3. Forecast future capacity requirements based on trends.</p>
              <p>4. Generate capacity expansion recommendations.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/momo_image.jpg" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>

            <div class="tab-pane fade" id="p-airtel">
              <div class="row align-items-center">
      
             <div class="col-md-8">
              <h5><strong>Alert Management</strong></h5>
              <p>1. Receive instant notifications for critical system events.</p>
              <p>2. Configure alert thresholds and escalation policies.</p>
              <p>3. Acknowledge and resolve alerts from the dashboard.</p>
              </div>

      <div class="col-md-4 text-end">
        <img src="images/finance-landing-page.png" class="info-img animated-img" style="max-width:100%; height:auto;">
      </div>

  </div>
            </div>
          </div>
        </section>

        <!-- PROPOSED RESULTS -->
         
        <section class="mb-5 row align-items-center">
       
           <div class="col-md-8 text-right">
            <img src="images/Group-4229-1.png" class="info-img animated-img">
          </div>
              <div class="col-md-4">
          <h4 class="mb-3"><strong>Expected Results & Benefits</strong></h4>
          <ul class="text-muted">
            <li>Reduced downtime and operational issues</li>
            <li>Faster problem detection and resolution</li>
            <li>Automated monitoring and alerting</li>
            <li>Real-time notifications and escalation</li>
            <li>Transparency and compliance reporting</li>
            <li>Optimized resource utilization</li>
          </ul>
         </div>
        </section>

        <!-- CTA -->
        <section class="text-center mt-5 fade-in">
          <h4>Ready to Monitor Your Data Center?</h4>
          <p class="text-muted">Click below to sign in or request access to the monitoring system.</p>
          <a href="sign-on" class="btn btn-primary px-4">Proceed to Monitoring Portal</a>
        </section>

      </div>
     </div>
    </div>
  </div>
</main>



<?php include 'ft2.php';?>