(function( $ ) {

    $(document).ready(function() {

        setUpMixer();
        

        function removeActiveClass() {
            var controlButtons = document.querySelector('.mix-controls').querySelectorAll('button');

            controlButtons.forEach(function(button) {
                button.classList.remove('active');
            })
        }

        function setUpMixer() {

            var container = document.getElementById('portfolio-items');
            var containerHeight = container.offsetHeight;

            console.log(containerHeight);

            container.style.minHeight = containerHeight + 'px';

            attachButtonEvents();
            sortContainerItems();
        }

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

        /* Hide all items with the target filter data */

        function applyFilter(filterString, rawFilter) {

            var mixItems = document.querySelectorAll('.mix');
            var filteredItems = $(mixItems).filter(filterString);

            var otherItems = $(mixItems).filter(function(i, item) {
                return item.dataset.tax != rawFilter;
            }); 


            $(otherItems).each(function(i, item) {
                $(item).fadeOut();
            });

            fadeInFiltered(filteredItems);

        }

        function fadeInFiltered(filteredItems) {
            $(filteredItems).each(function(i, item) {
                setTimeout(function() {
                    $(item).fadeIn();
                }, 400);
            });
        }

        function hideAllItems() {
            var mixItems = document.querySelectorAll('.mix');

            $(mixItems).each(function(i, item) {
                $(item).fadeOut();
            });
        }

        function showAllItems() {
            
            var mixItems = document.querySelectorAll('.mix');

            fadeInFiltered(mixItems);
        }
        
    });
})( jQuery );