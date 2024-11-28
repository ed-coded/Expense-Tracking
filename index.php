<?php

@include 'db_connect.php';  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NYAMEWOTUMI Ltd.</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="icon" href="https://img.icons8.com/officel/80/administrator-male.png">
</head>
<body>
  <header>
    <nav class="side-bar">
      <h2>Navigation Panel</h2>
      <hr>
      <li><img src="https://img.icons8.com/fluency-systems-regular/50/dashboard-layout.png"><a id="dashboard_nav" onclick="showDashboard()">Dashboard</a></li>
      <li><img src="https://img.icons8.com/ios/50/add--v1.png"><a id="add_revenue_nav" onclick="showAddRevenue()">Add Revenue</a></li>
      <li><img src="https://img.icons8.com/dotty/80/add.png"><a id="add_expense_nav" onclick="showAddExpense()">Add Expense</a></li>
      <li><img src="https://img.icons8.com/ios/50/graph-report.png"><a id="reports_nav" onclick="showReports()">Reports</a></li>

      <p id="xtra"><span class="com-name">NYAMEWOTUMI Ltd.</span> 
        <span>&copy; 2024 All rights reserved.</span>
      </p>
    </nav>
  </header>

  <main class="current-display">

  <section class="dashboard-section">

    <h1>Financial Dashboard</h1>
    
 <div class="big-3">
      <div id="revenue-summary">
        <h3>Total Revenue: </h3><span id="total-revenue">
        GH₵

        
  <?php

$addQuery = "SELECT SUM(revenue_amount) AS total FROM revenue_tracker";
$run = $connect->query($addQuery);
$total_revenue = $run->fetch_assoc()['total'] ?? 0; 


echo "$total_revenue.00";

?>
</span>
</div>

      <div id="expense-summary">
        <h3>Total Expenses: </h3>
          <span id="total-expense">
          GH₵
          <?php

$addQuery2 = "SELECT SUM(expense_amount) AS total FROM expense_tracker";
$run2 = $connect->query($addQuery2);
$total_expense = $run2->fetch_assoc()['total'] ?? 0; 


echo "$total_expense.00";

?>

        </span>
      </div>

      <div id="balance-summary">
        <h3>Total Balance: </h3>
        <span id="balance">
        GH₵
        <?php

$balance = $total_revenue - $total_expense;
echo "$balance.00";

       ?>
        </span>
      </div>


      
    </div>









    <!-- statistics image-->

    <div class="main-container">
      <div class="year-stats">
        <div class="month-group">
          <div class="bar h-100"></div>
          <p class="month">Jan</p>
        </div>
        <div class="month-group">
          <div class="bar h-50"></div>
          <p class="month">Feb</p>
        </div>
        <div class="month-group">
          <div class="bar h-75"></div>
          <p class="month">Mar</p>
        </div>
        <div class="month-group">
          <div class="bar h-25"></div>
          <p class="month">Apr</p>
        </div>
        <div class="month-group">
          <div class="bar h-100"></div>
          <p class="month">May</p>
        </div>
        <div class="month-group">
          <div class="bar h-50"></div>
          <p class="month">Jun</p>
        </div>
        <div class="month-group">
          <div class="bar h-75"></div>
          <p class="month">Jul</p>
        </div>
        <div class="month-group">
          <div class="bar h-25"></div>
          <p class="month">Aug</p>
        </div>
        <div class="month-group">
          <div class="bar h-50"></div>
          <p class="month">Sep</p>
        </div>
        <div class="month-group">
          <div class="bar h-75"></div>
          <p class="month">Oct</p>
        </div>
        <div class="month-group selected">
          <div class="bar h-25"></div>
          <p class="month">Nov</p>
        </div>
        <div class="month-group">
          <div class="bar h-100"></div>
          <p class="month">Dec</p>
        </div>
      </div>

      <!-- end -->
  
      <div class="stats-info">
        <div class="graph-container">
          <div class="percent">
            <svg viewBox="0 0 36 36" class="circular-chart">
              <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
        a 15.9155 15.9155 0 0 1 0 31.831
        a 15.9155 15.9155 0 0 1 0 -31.831" />
              <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
        a 15.9155 15.9155 0 0 1 0 31.831
        a 15.9155 15.9155 0 0 1 0 -31.831" />
              <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
        a 15.9155 15.9155 0 0 1 0 31.831
        a 15.9155 15.9155 0 0 1 0 -31.831" />
              <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
        a 15.9155 15.9155 0 0 1 0 31.831
        a 15.9155 15.9155 0 0 1 0 -31.831" />
            </svg>
          </div>
          <p>Current Revenue: 
           <span class="rev-text">
           <?php

$addQuery = "SELECT SUM(revenue_amount) AS total FROM revenue_tracker";
$run = $connect->query($addQuery);
$total_revenue = $run->fetch_assoc()['total'] ?? 0; 


echo "$total_revenue.00";

?>
            </span>
                  </p>
        </div>
  
        <div class="info">
          <p><em>Revenue<em> For Prev Month: <span>GH₵ 700,000</span></p>
          <p><em>Expenses<em> For Prev Month: <span>GH₵ 100,000</span></p>
        </div>
      </div>
    </div>


    

  </section>

    <section class="add-revenue-section">

      <form id="revenue-form" method="POST" action="./revenue_inject.php">
        <input type="number" id="revenue-amount" placeholder="Amount" required name="revenue_amount">
        <textarea type="text" id="revenue-description" placeholder="Add revenue description.." name="revenue_description"></textarea>
        <!--<input type="date" id="revenue-date" required name="revenue_date"> -->
        <button type="submit" name="submit" value="submit">Add Revenue</button>
      </form>
    </section>

    <section  class="add-expense-section">
      <form id="expense-form" method="POST" action ="./expense_inject.php">
        <input type="number" id="expense-amount" placeholder="Amount" required name="expense_amount">
        <textarea type="text" id="expense-description" placeholder="Add expense description.." name="expense_description"></textarea>
        <!--<input type="date" id="expense-date" required name="date"> -->
        <button type="submit" name="submit" value="submit">Add Expense</button>
      </form>
    </section>

    <section class="reports-section">

      <div class="revenue-reports">
      <h2>Revenue reports:</h2>
      <?php
    
    $sql3 = "SELECT revenue_amount, revenue_description, revenue_date_and_time FROM revenue_tracker"; // Replace 'your_table_name' with the actual table name
    $deployer = $connect->query($sql3);

    if ($deployer->num_rows > 0) {
        while ($row = $deployer->fetch_assoc()) {
            echo "<p>On the <span id='date-time'>" . htmlspecialchars($row['revenue_date_and_time']) . 
                 ", </span> an amount of GH₵<span id='amount'>" . htmlspecialchars($row['revenue_amount']) .".00" . 
                 "</span> was gained from <span id='description'>" . htmlspecialchars($row['revenue_description']) . "</span></p>";
        }
    } else {
        echo "<p>No records found.</p>";
    }

    
    ?>

      </div>

      <br><br>


      <div class="expense-reports">
        <h2>Expense reports:</h2>

      <?php
    
    $sql4 = "SELECT expense_amount, expense_description, expense_date_and_time FROM expense_tracker"; // Replace 'your_table_name' with the actual table name
    $deployer2 = $connect->query($sql4);

    if ($deployer2->num_rows > 0) {
        while ($row = $deployer2->fetch_assoc()) {
            echo "<p>On the <span id='date-time'>" . htmlspecialchars($row['expense_date_and_time']) . 
                 ", </span> an amount of GH₵<span id='amount'>" . htmlspecialchars($row['expense_amount']) .".00" . 
                 "</span> was used for <span id='description'>" . htmlspecialchars($row['expense_description']) . "</span></p>";
        }
    } else {
        echo "<p>No records found.</p>";
    }

    
    ?>

      </div>
      
    </section>


  </main>
  

  

  <script src="script.js"></script>
</body>
</html>
