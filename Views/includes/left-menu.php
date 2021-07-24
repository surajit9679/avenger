<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                             <div class="modal-header">
                                                            <h5 class="modal-title">Today's Call</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                            
                            <div class="modal-body">
                                <div class="table-responsive">
                                                <table class="table align-middle table-nowrap">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Sl No</th>
                                                            <th>Lead Name</th>
                                                            <th>Phone</th>
                                                            
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>Stephen Rash</td>
                                                            <td>
                                                                <p class="mb-0">325-250-1106</p>
                                                            </td>
                                                        </tr>
                                                       <tr>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>Stephen Rash</td>
                                                            <td>
                                                                <p class="mb-0">325-250-1106</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>Stephen Rash</td>
                                                            <td>
                                                                <p class="mb-0">325-250-1106</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <ul class="pagination pagination-rounded justify-content-end mb-2">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <i class="fas fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- Left Menu  -->


        <div class="vertical-menu bg-white">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
           
            <li>
               
                <a href="<?php echo base_url("dashboard"); ?>" class="has-arrow waves-effect">
                <i class="fas fa-tachometer-alt"></i>
                    <span key="t-dashboards">Dashboards</span>
                   <!-- <i class="fas fa-caret-down"></i> -->
                </a>



                <!--  <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="dashboard.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-tachometer-alt"></i>
                        <span key="t-layouts">Admin Dashboard</span>
                        </a>
                    </li>
                    
                  <li>
                        <a href="sales-executive-dashboard.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-tachometer-alt"></i>
                        <span key="t-layouts">Sales Executive Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="data-collecter-dashboard.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-tachometer-alt"></i>
                        <span key="t-layouts">Data Collecter Dashboard</span>
                        </a>
                    </li> 
                </ul>   -->
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-user"></i>
                    <span key="t-layouts">Lead Managment</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="<?php echo base_url('add-lead'); ?>" class="has-arrow" key="t-vertical">
                        <i class="fas fa-user-plus"></i>
                        <span key="t-layouts">Add Lead</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url('lead-list'); ?>" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-users"></i>
                        <span key="t-layouts">All Lead List</span>
                        </a>
                    </li>
                    <li>
                        <a href="assigned-led-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-users"></i>
                        <span key="t-layouts">Assigned Lead List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="call-list.php" class=" waves-effect">
                    <i class="fas fa-phone"></i>
                    <span key="t-layouts">Call Managment</span>
                </a>
            </li>
            <li>
                <a href="task.php" class=" waves-effect">
                    <i class="fas fa-thumbtack"></i>
                    <span key="t-layouts">Task</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-file-invoice-dollar"></i>
                    <span key="t-layouts">Quotation Managment</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="add-quotation.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-file-medical"></i>
                        <span key="t-layouts">Add Quotation</span></a>
                    </li>

                    <li>
                        <a href="quotation-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-file-alt"></i>
                        <span key="t-layouts">Quotation List</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin-user.php" class="waves-effect">
                <i class="fas fa-sign-in-alt"></i>
                    <span key="t-dashboards">User Login History</span>
                </a>
                
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-code-branch"></i>
                    <span key="t-layouts">Branch</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="add-branch.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-plus-square"></i>
                        <span key="t-layouts">Add Branch</span></a>
                    </li>
                    <li>
                        <a href="branch-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-list-alt"></i>
                        <span key="t-layouts">Branch List</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-user-tag"></i>
                    <span key="t-layouts">Employee Department</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="sales-list.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Sales</span></a>
                    </li>
                    <li>
                        <a href="scouting-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-calculator"></i>
                        <span key="t-layouts">Scouting</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-user-tag"></i>
                    <span key="t-layouts">Employee Management</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="add-employee.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-plus-square"></i>

                        <span key="t-layouts">Add Employee</span></a>
                    </li>
                    <li>
                        <a href="employee-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-list-alt"></i>
                        <span key="t-layouts">Employee List</span></a>
                    </li>
                </ul>
            </li>
            
            <li style="display:none;">
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-database"></i>
                    <span key="t-layouts">Data Sheet</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="add-datasheet.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-plus-square"></i>
                        <span key="t-layouts">Add Sheet</span></a>
                    </li>
                    <li>
                        <a href="data-list.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-list-alt"></i>
                        <span key="t-layouts">Data List</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-box"></i>
                    <span key="t-layouts">Master</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="dealer.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-store"></i>
                        <span key="t-layouts">Dealer</span></a>
                    </li>
                    <li>
                        <a href="sub-dealer.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-store"></i>
                        <span key="t-layouts">Sub Dealer</span></a>
                    </li>
                    <li>
                        <a href="interior.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-store"></i>
                        <span key="t-layouts">Interior</span></a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="far fa-file"></i>
                    <span key="t-layouts">Report</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="scouting-report.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-calculator"></i>
                        <span key="t-layouts">Souting Report</span></a>
                    </li>
                    <li>
                        <a href="call-report.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-phone"></i>
                        <span key="t-layouts">Calling Report</span></a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Sales Report</span><i class="fas fa-caret-down"></i></a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="primary-sales-report.php" key="t-light-sidebar"><i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Primary Sales Report</span></a></li>
                            <li><a href="secondary-sales-report.php" key="t-compact-sidebar"><i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Secondary Sales Report</span></a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-calendar-alt"></i>
                        <span key="t-layouts">Attendance Report</span><i class="fas fa-caret-down"></i></a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="daily-attendance-report.php" key="t-light-sidebar"><i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Daily Report</span></a></li>
                            <li><a href="monthly-attendance-report.php" key="t-compact-sidebar"><i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Monthly Report</span></a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="task-report.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-thumbtack"></i>
                        <span key="t-layouts">Task Report</span></a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-rupee-sign"></i>
                    <span key="t-layouts">Sales Management</span>
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="primary-sales.php" class="has-arrow" key="t-vertical">
                        <i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Primary Sale</span></a>
                    </li>
                    <li>
                        <a href="secondary-sale.php" class="has-arrow" key="t-horizontal">
                        <i class="fas fa-rupee-sign"></i>
                        <span key="t-layouts">Secondary Sale</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="attendance-log.php" class="waves-effect">
                <i class="fas fa-calendar-alt"></i>
                    <span key="t-layouts">Attendance Log</span>
                    
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>