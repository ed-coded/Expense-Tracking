const dashboard_nav = document.getElementById("dashboard_nav");
const add_revenue_nav = document.getElementById("add_revenue_nav");
const add_expense_nav = document.getElementById("add_expense_nav");
const reports_nav = document.getElementById("reports_nav");

const dashboard_section = document.querySelector("section.dashboard-section");
const add_revenue_section = document.querySelector("section.add-revenue-section");
const add_expense_section = document.querySelector("section.add-expense-section");
const reports_section = document.querySelector("section.reports-section");
const inactive_sections = document.querySelectorAll("section");

document.addEventListener("DOMContentLoaded", function () {
  dashboard_section.classList.add("active");
  
});


function showDashboard() {
  inactive_sections.forEach(section => section.classList.remove("active"));
  dashboard_section.classList.add("active");
}

function showAddRevenue() {
  inactive_sections.forEach(section => section.classList.remove("active"));
  add_revenue_section.classList.add("active");
}

function showAddExpense(){
  inactive_sections.forEach(section => section.classList.remove("active"));
  add_expense_section.classList.add("active");

}

function showReports(){
  inactive_sections.forEach(section => section.classList.remove("active"));
  reports_section.classList.add("active")

}