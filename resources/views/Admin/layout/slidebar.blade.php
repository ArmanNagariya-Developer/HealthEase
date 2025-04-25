     <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{route("admin-dashboard")}}" class="brand-link">
            <!--begin::Brand Image-->
            <img
                  src="https://cdn-icons-png.flaticon.com/512/6998/6998099.png" style="width: 50px; height: 50px;" 
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Doctor</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link active">
                      <i class="nav-icon bi bi-house"></i>
                      <p>Home</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-calendar-check"></i>
                  <p>
                    Appointments
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon bi bi-telephone-inbound-fill"></i>
                      <p>Join Meeting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon bi bi-card-checklist"></i>
                      <p>Manage Appointment</p>
                    </a>
                  </li>
                </ul>
              </li>  
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-person-fill"></i>
                  <p>
                    Users
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon bi bi-person-lines-fill"></i>
                      <p>Manage User</p>
                    </a>
                  </li>
                </ul>
              </li>  
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-prescription2"></i>
                  <p>
                    Manage Medicine
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon bi bi-capsule"></i>
                      <p>Add Medicine</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="nav-icon bi bi-lungs"></i>
                      <p>Manage Medicine</p>
                    </a>
                  </li>
                </ul>
              </li>  
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>