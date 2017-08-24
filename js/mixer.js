/* 

Sets up controls and handles filtering of elements. Buttons within .mix-controls will provide filtering terms
in data-filter attribute. Elements with the .mix class within a .mix-container submit themselves to filtering

*/

(function( $ ) {

    $(document).ready(function() {

        setUpMixer();

        /* 

        Initial mixer setup. Find initial height of .mix-container and don't allow it to shrink in spite of items that may
        be filtered. Attach events to .mix-control buttons and sort .mix elements by their taxonomy

         */

        function setUpMixer() {

            var container = document.querySelector('.mix-container');
            var containerHeight = container.offsetHeight;

            container.style.minHeight = containerHeight + 'px';

            attachButtonEvents();
            sortContainerItems();
        }

        /* Add event listeners for buttons within .mix-controls */

        function attachButtonEvents() {

            var controlButtons = document.querySelector('.mix-controls').querySelectorAll('button');
            
            controlButtons.forEach(function(button) {
                button.addEventListener('mousedown', function() {
                    filterItems(button.dataset.filter);
                    removeActiveClass();
                    this.classList.add('active');
                });
            });
        }

        /* Remove the active class from any control buttons */

        function removeActiveClass() {
            var controlButtons = document.querySelector('.mix-controls').querySelectorAll('button');

            controlButtons.forEach(function(button) {
                button.classList.remove('active');
            })
        }

        /* Sort all items in a .mix-container alphabetically by taxonomy data */

        function sortContainerItems() {
            var mixItems = document.querySelectorAll('.mix');
            var mixArray = [...mixItems];


            mixArray = (mixArray).sort(function(firstBox, secondBox) {
                var firstTax = firstBox.dataset.tax;
                var secondTax = secondBox.dataset.tax;

                return firstTax.charAt(0) < secondTax.charAt(0);
            });

            mixArray.forEach(function(item) {
                document.querySelector('.mix-container').appendChild(item);
            });
        }

        /* determine how to filter mix items */

        function filterItems(filter) {

            var filterString = '[data-tax="' + filter + '"]';

            if (filter === 'all') {
                showAllItems();
            } else if (filter === 'none') {
                hideAllItems();
            } else {
                applyFilter(filterString, filter);
            }   

        }

        /* Show onlyitems with the target filter data */

        function applyFilter(filterString, rawFilter) {

            var mixItems = document.querySelectorAll('.mix');
            var filteredItems = $(mixItems).filter(filterString);

            // Find all items not containing the current taxonomy in their data-tax attribute

            var otherItems = $(mixItems).filter(function(i, item) {
                return item.dataset.tax != rawFilter;
            }); 

            // Fade out all items not within the current taxonomy

            $(otherItems).each(function(i, item) {
                $(item).fadeOut();
            });

            fadeInFiltered(filteredItems);

        }

        /* Fade in all items belonging to the filtered list */

        function fadeInFiltered(filteredItems) {
            $(filteredItems).each(function(i, item) {
                setTimeout(function() {
                    $(item).fadeIn();
                }, 400);
            });
        }

        /* Hide all .mix items regardless of taxonomy */

        function hideAllItems() {
            var mixItems = document.querySelectorAll('.mix');

            $(mixItems).each(function(i, item) {
                $(item).fadeOut();
            });
        }

        /* Show all .mix items regardless of taxonomy */

        function showAllItems() {
            
            var mixItems = document.querySelectorAll('.mix');

            fadeInFiltered(mixItems);
        }
        
    });
})( jQuery );