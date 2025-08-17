<nav class="font-noi-grotesk fixed top-0 right-0 left-0 z-50 border-b border-[#42424280] bg-[rgba(14,14,14,0.5)] shadow-[0_2px_10px_rgba(0,0,0,0.05)] backdrop-blur-[30px] backdrop-saturate-180">
        <div class="flex items-center justify-between px-6 lg:px-12 h-16 lg:h-20">

          <div class="hidden lg:flex items-center space-x-16 border-r border-[#42424280] px-12 font-medium text-gray-400">
            <a href="#home" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">HOME</p></a>
            <a href="#about" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">ABOUT</p></a>
            <a href="#education" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">EDUCATION</p></a>
          </div>

          <div class="flex justify-start lg:justify-center flex-1 lg:flex-none p-3">
            <img src="wwwroot/logo.gif" alt="Logo" class="h-full max-h-12 w-auto object-contain" />
          </div>

          <div class="flex items-center space-x-4">
            <div class="hidden lg:flex items-center space-x-16 border-l border-[#42424280] px-12 font-medium text-gray-400">
              <a href="#projects" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">PROJECTS</p></a>
              <a href="#services" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">SERVICES</p></a>
              <a href="#contacts" class="hover:text-brand-primary py-6 text-center transition-colors duration-200"><p class="text-lg">CONTACTS</p></a>
            </div>

            <button id="menu-btn"
              class="lg:hidden flex flex-col justify-center items-center w-10 h-10 cursor-pointer relative z-50 group"
              aria-label="Toggle menu">

              <span class="w-6 h-0.5 bg-white rounded-full transition-transform duration-300 ease-in-out origin-center group-[.open]:translate-y-2 group-[.open]:rotate-45"></span>
              <span class="w-6 h-0.5 bg-white rounded-full my-1.5 transition-all duration-300 ease-in-out group-[.open]:opacity-0 group-[.open]:-translate-x-5"></span>
              <span class="w-6 h-0.5 bg-white rounded-full transition-transform duration-300 ease-in-out origin-center group-[.open]:-translate-y-2 group-[.open]:-rotate-45"></span>
            </button>
          </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden flex-col space-y-4 p-6 bg-[rgba(14,14,14,0.9)] backdrop-blur-lg text-gray-400">
          <a href="#home" class="block hover:text-brand-primary transition">HOME</a>
          <a href="#about" class="block hover:text-brand-primary transition">ABOUT</a>
          <a href="#education" class="block hover:text-brand-primary transition">EDUCATION</a>
          <a href="#projects" class="block hover:text-brand-primary transition">PROJECTS</a>
          <a href="#services" class="block hover:text-brand-primary transition">SERVICES</a>
          <a href="#contacts" class="block hover:text-brand-primary transition">CONTACTS</a>
        </div>
      </nav>