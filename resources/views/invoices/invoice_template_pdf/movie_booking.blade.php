<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Digital Invoica</title>
	<link href="a{{asset('assets/invoice/images/favicon/icon.png')}}" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/media-query.css')}}">
</head>
<body>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap movie">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="invoice-header" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo invoice-logo-movie width-50">
							<a href="movie_booking.html" class="logo-movie"><img src="{{asset('assets/invoice/images/movie/logo.png')}}" alt="this is a invoice logo"></a>
							<div class="pt-30">
								<div class="invo-cont-wrap invo-contact-wrap">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#3742FA"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="tel:+12345678899" class="font-18 color-light-black">+1 234 567 8899</a>
									</div>
								</div>
								<div class="invo-cont-wrap pt-10">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#3742FA"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="mailto:contact@invoice.com" class="font-18 color-light-black">contact@invoice.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="invo-head-content width-50">
							<div class="invo-head-content-movie">
								<p class="font-md color-white text-right pos-relative">4510 E Dolphine St, IN 3526 Hills Road, New York, USA</p>
							</div>
							<div class="movie-title pt-40">
								<h1 class="movie-txt text-right">INVOICE</h1>
							</div>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="ticket-booking-content" id="ticket_booking">
					<div class="container">
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap stadium-second-sec">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Buyer Info:</p>
									<h2 class="font-lg color-dark-blue pt-10">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap stadium-first-sec">
								<div class="invo-head-content pt-20  ">
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div class="color-light-black font-md">Invoice No:</div>
										<div class="font-md-grey color-light-black ">#DI56789</div>
									</div>
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div class="color-light-black font-md">Invoice Date:</div>
										<div class="font-md-grey color-light-black ">15/12/2024</div>
									</div>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->
						<!--Movie detail start here -->
						<div class="movie-details-wrap">
							<div class="movie-col-left movie-img width-50">
								<img src="{{asset('assets/invoice/images/movie/movie.png')}}" alt="this is a movie image">
							</div>
							<div class="movie-col-right movie-deatils width-50">
								<div class="movie-detail-col border-bottom table-bg">
									<div class="font-md color-light-black movie-name">Movie Name:</div>
									<div class="font-md-grey color-grey" >Avatar: The Way Of Water</div>
								</div>
								<div class="movie-detail-col border-bottom">
									<div class="font-md color-light-black movie-name">Show Date:</div>
									<div class="font-md-grey color-grey" >30/11/2022</div>
								</div>
								<div class="movie-detail-col border-bottom table-bg">
									<div class="font-md color-light-black movie-name">Show Time:</div>
									<div class="font-md-grey color-grey" >08:15 PM</div>
								</div>
								<div class="movie-detail-col border-bottom">
									<div class="font-md color-light-black movie-name">Screen:</div>
									<div class="font-md-grey color-grey" >Royal</div>
								</div>
								<div class="movie-detail-col border-bottom table-bg">
									<div class="font-md color-light-black movie-name">Seat No:</div>
									<div class="font-md-grey color-grey" >A- 1, 2, 3</div>
								</div>
								<div class="movie-detail-col border-bottom">
									<div class="font-md color-light-black movie-name">Theatre:</div>
									<div class="font-md-grey color-grey" >Pali Hill, Dallas</div>
								</div>
							</div>
						</div>
						<!--Movie detail end here -->
						<!--Movie data start here -->
						<div class="table-wrapper movie-details-table-wrapper pt-40">
							<table class="invoice-table movie-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black w-40 text-left">Description</th>
										<th class="font-md color-light-black qty-wid text-left">Price</th>
										<th class="font-md color-light-black qty-wid text-center">Qty</th>
										<th class="font-md color-light-black qty-wid text-center">Tax</th>
										<th class="font-md color-light-black re-qty-wid text-right">Amount</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm">Avatar - Royal Screen - 30 Nov - 08:15 PM</td>
										<td class="font-sm">$80.00</td>
										<td class="font-sm text-center">3</td>
										<td class="font-sm text-center">18%</td>
										<td class="font-sm text-right">$283.20</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm">Pop Corn Combo</td>
										<td class="font-sm">$40.00</td>
										<td class="font-sm text-center">2</td>
										<td class="font-sm text-center">5%</td>
										<td class="font-sm text-right">$84.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="invo-addition-wrap movi-add-wrap">
							<div class="invo-bill-total width-30">
								<table class="invo-total-table">
									<tbody>
										<tr class="invo-grand-total">
											<td class="font-18-700 color-dark-blue pt-20">Grand Total:</td>
											<td class="font-18-500 color-light-black pt-20 text-right" >$327.20</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Movie data end here -->
						<!--Movie payment details start here -->
						<div class="payment-table-wrap hotel-booking-wrap movie-bg">
							<table class="invo-payment-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-white payemnt-wid">Payment Details</th>
										<th class="font-md color-white date-wid">Date</th>
										<th class="font-md color-white trans-wid">Booking ID</th>
										<th class="font-md color-white amount-wid text-right">Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr class="invo-paye-row-movie">
										<td class="font-sm payment-desc color-white">American Express</td>
										<td class="font-sm payment-desc color-white">25/11/2022</td>
										<td class="font-sm payment-desc color-white">TD52369815</td>
										<td class="font-sm payment-desc color-white text-right">$327.20</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Movie payment details end here -->
						<!--Movie must read start here -->
						<div class="movie-must-read-wrap">
							<div class="movie-must-title">
								<h3 class="font-md color-light-black pt-40">Must Read:</h3>
								<p class="font-sm color-grey pt-10">Ultrices tempor nibh elit cursus euismod cursus. Auctor in maecenas amet etiam faucibus. Proin sit viverra velit vitae enim in elementum diam a. Adipiscing euismod sed quis malesuada lorem tellus congue in donec. In fringilla mauris condimentum massa leo. In duis pellentesque viverra rhoncus tellus risus pretium.</p>
							</div>
						</div>
						<!--Movie must read end here -->
					</div>
				</section>
				<!--Invoice content end here -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content end -->
			</section> 
			<!--Bottom content end here -->
		</div>
	</div>
	<!--Invoice wrap end here -->
	<script src="{{asset('assets/invoice/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/jspdf.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/html2canvas.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/custom.js')}}"></script>
</body>
</html>