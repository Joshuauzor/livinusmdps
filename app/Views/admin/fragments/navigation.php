<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div> 
      <!-- / main menu header-->
      <!-- main menu content--> 
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="<?= base_url('admin') ?>"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
          </li>
          <!--  -->
          <!-- <li class=" nav-item"><a href="#"><i class="icon-android-desktop"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Live Trade</span></a> -->
          </li>
          <li class=" nav-item"><a href="<?= base_url('admin/symptoms') ?>"><i class="icon-ios-people"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Symptoms</span></a>
          </li>
          <li class=" nav-item"><a href="<?= base_url('admin/prescription') ?>"><i class="icon-ios-people"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Prescription</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-cash"></i><span data-i18n="nav.maps.main" class="menu-title">Diagnosis</span></a>
            <ul class="menu-content">
              <li><a href="<?= base_url('admin/positive') ?>" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">Positive</a>
              </li>
              <li><a href="<?= base_url('admin/negative') ?>" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">Negative</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="<?= base_url() ?>"><i class="icon-arrow-left4"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Back Home</span></a>
          </li>    
          <li class=" nav-item"><a href="<?= base_url('admin/logout') ?>"><i class="icon-android-unlock"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Logout</span></a>
          </li>        
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->