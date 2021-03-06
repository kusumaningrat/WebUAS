filterSelection('all');
function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName('filtering');
	if (c == 'all') c = '';
	// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
	for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], 'show');
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], 'show');
	}
}

// Show filtered elements
function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(' ');
	arr2 = name.split(' ');
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {
			element.className += ' ' + arr2[i];
		}
	}
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(' ');
	arr2 = name.split(' ');
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
			arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
	}
	element.className = arr1.join(' ');
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById('myBtnContainer');
var btns = btnContainer.getElementsByClassName('btn');
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener('click', function() {
		var current = document.getElementsByClassName('active');
		current[0].className = current[0].className.replace(' active', '');
		this.className += ' active';
	});
}

function Subs(index){
    for (var i = 1; i < 10; i++) {
        let subs = document.querySelector('#subs' + i)
        let btn = document.getElementById("subs" + i);
        if(i == index){
            subs.style.backgroundColor = subs.style.backgroundColor === 'red' ? 'grey':'red';
            btn.value = btn.value == "Subscribe" ? "Unsubscribe" : "Subscribe";
            subs.style.color = subs.style.color === 'white' ? 'black' : 'white';
        }
    }
}

function Favourites(index){
	for (var i = 1; i < 10; i++) {
		var icon = document.getElementById('icon' + i)
		if(i == index){
			icon.className = icon.className === "fa fa-heart" ? "far fa-heart" : "fa fa-heart";
			// btn.value = btn.value == "Subscribe" ? "Unsubscribe" : "Subscribe";
			// subs.style.color = subs.style.color === 'white' ? 'black' : 'white';
		}
	}
}




// let subs = document.querySelector('#subs')
// subs.addEventListener('click', () => {
//     subs.style.backgroundColor = '#B0B0B0'
//     subs.style.color = '#707070'
      
// });
