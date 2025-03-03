<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">yusron</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <div>
            <a href="{{ url('manager/dashboard') }}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </div>
        <li class="menu-label">Main Content</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-task'></i>
                </div>
                <div class="menu-title">Work Order</div>
            </a>
            <ul>
                <li> <a href="{{ url('manager/detail_orders') }}"><i class="bx bx-right-arrow-alt"></i>Details</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Operator</div>
            </a>
            <ul>
                <li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Details</a>
                </li>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>