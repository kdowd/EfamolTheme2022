document.addEventListener('DOMContentLoaded', onDomLoadedForProductPanel);

function onDomLoadedForProductPanel(e) {
	console.log('thumb 1');
	var clickableThumbs = document.querySelectorAll('.clickable-thumb');
	var targetImageElement = document.querySelector('.target_image-ui img');

	clickableThumbs.forEach((ele) => {
		console.log('thumb 2');

		ele.addEventListener('mouseover', (e) => {
			e.target.style = 'cursor:pointer';
		});

		ele.addEventListener('click', (e) => {
			var srcSetA = e.target.getAttribute('srcset');
			console.log('thumb 3');
			if (typeof targetImageElement === 'object' && typeof srcSetA === 'string') {
				console.log('thumb 4');
				targetImageElement.setAttribute('srcset', srcSetA);
			}
		});
	});
}
