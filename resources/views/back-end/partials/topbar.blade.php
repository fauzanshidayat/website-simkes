 <header class="flex items-center justify-between mb-8 relative">
     <!-- Sidebar toggle for mobile -->
     <button aria-label="Toggle sidebar" id="sidebarToggle" class="md:hidden text-[#067344] text-2xl focus:outline-none">
         <i class="fas fa-bars"></i>
     </button>

     <!-- Page title -->
     <h2 class="text-3xl font-semibold text-[#067344]">Dashboard</h2>

     <!-- Right section -->
     <div class="flex items-center space-x-4 relative">

         <!-- User button + dropdown -->
         <div class="relative">
             <button id="userMenuButton" aria-label="User menu"
                 class="bg-[#067344] text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-[#05592a] transition focus:outline-none">
                 <i class="fas fa-user-circle"></i>
             </button>
             <!-- Dropdown menu -->
             <div id="userDropdown"
                 class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-50">

                 <form action="{{ route('logout') }}" method="POST" id="logout-form">
                     @csrf
                     <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                         Logout
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </header>
