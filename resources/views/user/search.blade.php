@extends('layouts.master')
@section('add-css')
	<style media="screen">
		.stars {
			cursor: pointer;
			display: flex;
		}
		.stars:hover .star polygon {
			fill: #ffd055 !important;
		}
		.stars .star polygon {
			fill: #d8d8d8;
		}
		.stars .star:hover ~ .star polygon {
			fill: #d8d8d8 !important;
		}
		.stars[data-stars] .star polygon {
			fill: #ffd055;
		}
		.stars[data-stars="1"] .star:nth-child(1) ~ .star polygon {
			fill: #d8d8d8;
		}
		.stars[data-stars="2"] .star:nth-child(2) ~ .star polygon {
			fill: #d8d8d8;
		}
		.stars[data-stars="3"] .star:nth-child(3) ~ .star polygon {
			fill: #d8d8d8;
		}
		.stars[data-stars="4"] .star:nth-child(4) ~ .star polygon {
			fill: #d8d8d8;
		}
		.stars[data-stars="5"] .star:nth-child(5) ~ .star polygon {
			fill: #d8d8d8;
		}

	</style>
@endsection

@section('content')
	@include('user.content-search')
@endsection

@section('add-js')
	<script type="text/javascript">
	const starEls = document.querySelectorAll('.star.rating');
	starEls.forEach(star => {
		star.addEventListener('click', function(e) {
			let starEl = e.currentTarget;
			console.log(starEl.parentNode.dataset.stars + ", " + starEl.dataset.rating);
			starEl.parentNode.setAttribute('data-stars', starEl.dataset.rating);
		});
	})
	// if(window.location.hash) {
	// 	// Fragment exists
	// 	if (window.location.hash == "#step1") {
	// 		$("#step1").removeClass("d-none");
	// 		$("#step2").addClass("d-none");
	// 		$("#step3").addClass("d-none");
	// 		$("#step4").addClass("d-none");
	// 		$("#step5").addClass("d-none");
	// 	} else if (window.location.hash == "#step2") {
	// 	} else if (window.location.hash == "#step3") {
	// 	} else if (window.location.hash == "#step4") {
	// 	} else if (window.location.hash == "#step5") {
	//
	// 	}
	// } else {
	// 	// Fragment doesn't exist
	// }
	</script>
@endsection
