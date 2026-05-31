<?php include 'hd2.php';?>
 <style>
  .info-img {
    width: 100%;
    max-width: 220px;
    border-radius: 10px;
  }

  .animated-img {
    animation: slideIn 1.2s ease;
  }

  @keyframes slideIn {
    from { opacity: 0; transform: translateX(40px); }
    to { opacity: 1; transform: translateX(0); }
  }

  .fade-in {
    animation: fadeIn 1.5s ease;
  }

  @keyframes fadeIn {
    from { opacity:0 }
    to { opacity:1 }
  }

  @media (max-width: 768px) {
    .info-img { margin-top: 20px; }
  }
</style>

<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center fade-in">
      <div class="col-12">
        <div class="card shadow-sm p-4">

        <!-- TITLE -->
        <div class="text-center mb-4">
          <h2 class="h3 font-weight-bold">Welcome to Data Center Server Room Monitoring System</h2>
          <p class="text-muted">
            A complete solution to monitor infrastructure health, track system performance, and manage server operations
            for your data center — accurately, transparently, and in real time.
          </p>
        </div>

        <!-- INTRO -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4><strong>About the System</strong></h4>
            <p class="text-muted">
              This monitoring system is designed to help data center operators and managers
              track all server room conditions, monitor equipment health, manage energy consumption,
              and generate reliable operational reports.
            </p>
            <p class="text-muted">
              Whether your data center oversees power distribution, cooling systems, network infrastructure, or security,
              all metrics are recorded, categorized, and analyzed automatically.
            </p>
          </div>
          <div class="col-md-5 text-center">
            <img src="images/download.png" class="info-img animated-img">
          </div>
        </section>

        <!-- CORE MODULES -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4><strong>Core Monitoring Modules</strong></h4>
            <ul class="text-muted">
              <li><strong>Real-Time Monitoring</strong> – Temperature, humidity, power usage, security status</li>
              <li><strong>Alert Management</strong> – Notifications for critical issues and anomalies</li>
              <li><strong>Performance Tracking</strong> – Server uptime, CPU usage, disk space, network bandwidth</li>
              <li><strong>Equipment Management</strong> – Inventory tracking and maintenance scheduling</li>
              <li><strong>Energy Management</strong> – Power consumption reporting and optimization</li>
              <li><strong>Audit Trail</strong> – Track all system changes and access logs</li>
            </ul>
          </div>
          <div class="col-md-5 text-center">
           
          </div>
        </section>

        <!-- HOW IT WORKS -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-7">
            <h4><strong>How the Monitoring Flow Works</strong></h4>
            <ol class="text-muted">
              <li>Deploy monitoring sensors in server rooms and infrastructure.</li>
              <li>Collect real-time data on temperature, humidity, power, and systems.</li>
              <li>System analyzes metrics against configured thresholds and baselines.</li>
              <li>Critical alerts are flagged for immediate attention.</li>
              <li>Operators acknowledge and respond to incidents.</li>
              <li>Generate comprehensive infrastructure reports and analytics.</li>
            </ol>
          </div>
          <div class="col-md-5 text-center">
            <img src="images/icons.png" class="info-img animated-img">
          </div>
        </section>

        <!-- ALERTS & NOTIFICATIONS -->
        <section class="mb-5">
          <h4><strong>Real-Time Alerts & Notifications</strong></h4>
          <p class="text-muted">
            Alerts ensure that critical infrastructure events are detected and addressed immediately.
            This prevents downtime, equipment failure, and operational disruptions.
          </p>
          <ul class="text-muted">
            <li>Instant notifications for temperature and humidity anomalies</li>
            <li>Power failure and UPS status alerts</li>
            <li>Security breach and unauthorized access notifications</li>
            <li>Multi-level alert escalation policy</li>
            <li>Alert history and resolution tracking</li>
          </ul>
        </section>

        <!-- REPORTS -->
        <section class="mb-5 row align-items-center">
          <div class="col-md-8 text-right">
            <img src="images/down2.png" class="info-img animated-img">
          </div>
          <div class="col-md-4">
            <h4><strong>Infrastructure Reports</strong></h4>
            <ul class="text-muted">
              <li>Server Room Status Summary</li>
              <li>Power Consumption Analysis</li>
              <li>Temperature & Cooling Efficiency</li>
              <li>Equipment Health & Maintenance</li>
              <li>Security Access Logs</li>
              <li>Capacity Planning Reports</li>
            </ul>
          </div>
        </section>

        <!-- BENEFITS -->
        <section class="mb-5">
          <h4><strong>Key Benefits</strong></h4>
          <ul class="text-muted">
            <li>Prevent costly infrastructure downtime</li>
            <li>Optimize energy efficiency and reduce costs</li>
            <li>Ensure equipment longevity through proper monitoring</li>
            <li>Maintain operational compliance and standards</li>
            <li>Real-time visibility across all data center systems</li>
          </ul>
        </section>

        <!-- CTA -->
        <section class="text-center mt-5 fade-in">
          <h4>Monitor Your Data Center with Confidence</h4>
          <p class="text-muted">Start monitoring, analyzing, and optimizing your infrastructure today.</p>
          <a href="sign-on" class="btn btn-primary px-4">Go to Monitoring Dashboard</a>
        </section>

      </div>
     </div>
    </div>
  </div>
</main>



<?php include 'ft2.php';?>