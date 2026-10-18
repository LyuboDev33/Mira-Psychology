 <header class="dashboard-header">
     <div class="dashboard-header-left">
         <button class="dashboard-menu-button" id="dashboardToggle" type="button" aria-label="Open sidebar"
             aria-controls="dashboardSidebar" aria-expanded="false">
             <i class="fas fa-bars"></i>
         </button>
         <div>
             <h1 class="dashboard-header-title">Здравейте {{ Auth::user()->name }} </h1>
             <p class="dashboard-header-subtitle">Добре дошли в таблото за управление</p>
         </div>
     </div>
     <div class="dashboard-header-right">
         <div class="dashboard-user-details text-end">
             <div class="dashboard-user-name">{{ auth()->user()->name ?? 'My Account' }}</div>
             <div class="dashboard-user-role">Account</div>
         </div>
         <div class="dashboard-user-avatar" aria-hidden="true"><i class="fas fa-user"></i></div>
     </div>
 </header>
