    function decreaseValue() {
		var numberBox = document.getElementById('numberBox');
		if (numberBox.value > 1) {
			numberBox.value--;
		}
    }

    function increaseValue() {
		var numberBox = document.getElementById('numberBox');
		if (numberBox.value < 9) {
			numberBox.value++;
		}
    }

    function addToBasket() {
		// update the cart count
		updateCartCount();
		// Show notification
		showNotification();
    }

    function updateCartCount() {
		// logic to update the cart count
		// For example, let's increment a counter for this example
		var cartCount = 0;
		var quantity = parseInt(document.getElementById('numberBox').value) || 1;
		cartCount += quantity;
		localStorage.setItem('cartCount', cartCount);
		// Update the badge value
		updateBadgeValue(cartCount);
    }

    function updateBadgeValue(value) {
		var badge = document.querySelector('.badge');
		badge.innerText = value;
		// Show or hide the badge based on the value
		badge.style.display = value > 0 ? 'block' : 'none';
    }

    function showNotification() {
		var notification = document.getElementById('notification');
		notification.style.display = 'block';
		// Hide the notification after 3 seconds (adjust as needed)
		setTimeout(function () {
		notification.style.display = 'none';
		}, 3000);
    }

    $(document).ready(function () {
		$('.thumbnail').on('click', function () {
		var target = $(this).data('bs-target');
		var slideTo = $(this).data('bs-slide-to');
		$(target).carousel(slideTo);
		});

		// Activate Bootstrap tabs
		var tab = new bootstrap.Tab(document.querySelector('#ex3-tab-1'));
		tab.show(); // Show the first tab by default
    });
  	