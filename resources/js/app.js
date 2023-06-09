// Navigation toggle
window.addEventListener('load', function () {
      const svg_icon = document.getElementById('svg_icon');
      const menu_icon = "M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"
      const close_icon = "M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z";

      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
            if (!main_navigation.classList.contains('hidden')) {
                  svg_icon.setAttribute('d', close_icon);
                  document.addEventListener('click', closeMenu);
            } else {
                  svg_icon.setAttribute('d', menu_icon);
                  document.removeEventListener('click', closeMenu);
            }
      });

      function closeMenu(e) {
            if (!main_navigation.contains(e.target) && !e.target.closest('#primary-menu-toggle')) {
                  svg_icon.setAttribute('d', menu_icon);
                  main_navigation.classList.add('hidden');
                  document.removeEventListener('click', closeMenu);
            }
      }

});
