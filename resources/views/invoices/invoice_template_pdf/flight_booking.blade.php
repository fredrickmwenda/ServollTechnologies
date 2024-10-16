<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Digital Invoica</title>
	<link href="{{asset('assets/invoice/images/favicon/icon.png')}}" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/media-query.css')}}">
</head>
<body>
	<!--Invoice wrap Start here -->
	<div class="invoice_wrap flight">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="invoice-header flight-header" id="invo_header">
					<div class="flight-bg-top">
						<div class="flight-img1">
							<img src="{{asset('assets/invoice//images/flight/black-img.svg')}}" alt="background-img">
						</div>
						<div class="flight-img2">
							<img src="{{asset('assets/invoice//images/flight/purple-img.svg')}}" alt="background-img">
						</div>
					</div>
					<div class="invoice-logo-content invoice-logo-content-flight">
						<div class="invoice-logo">
							<a href="flight_booking.html" class="logo-flight"><img src="{{asset('assets/invoice//images/flight/logo.png')}}" alt="this is a invoice logo"></a>
							<p class="font-md-grey color-grey pt-30">4510 E Dolphine St, IN 3526 Hills Road, New York, USA</p>
						</div>
						<div class="flight-img">
							<img src="{{asset('assets/invoice//images/flight/flight.svg')}}" alt="flight-img">
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="flight-booking-content" id="flight_booking">
					<div class="container">
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Passenger Info:</p>
									<h1 class="d-none">Hidden</h1>
									<h2 class="color-blue-flight font-lg pt-10">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div>
								<div class="invo-head-content  ">
									<h1 class="flight-txt">INVOICE</h1>
									<div class="invo-head-wrap pt-20">
										<div class="font-md color-light-black wid-40-hotel">Invoice No:</div>
										<div class="font-md-grey color-grey">#DI56789</div>
									</div>
									<div class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency">
										<div class="font-md color-light-black wid-40-hotel">Invoice Date:</div>
										<div class="font-md-grey color-grey">15/12/2024</div>
									</div>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->
						<!--Flight timing content start here -->
						<div class="invoice-timing-wrap invoice-timing-wrap-flight pt-40">
							<div class="invo-time-col">
								<div class="booking-info booking-info-flight">
									<p class="font-sm"><b class="font-sm-700 color-light-black circle">From: </b>Toronto, Canada</p>
									<p class="font-sm mtb-14"><b class="font-sm-700 color-light-black circle">To: </b>Sydney, Australia</p>
								</div>
							</div>
							<div class="invo-time-col">
								<div class="booking-info booking-info-flight ">
									<p class="font-sm "><b class="font-sm-700 color-light-black circle">Departure: </b>15 Apr, 2023 (5:00 AM)</p>
									<p class="font-sm mtb-14"><b class="font-sm-700 color-light-black circle circle">Arrival: </b>17 Apr, 2023 (11:30 AM)</p>
								</div>
							</div>
						</div>
						<!--Flight timing content end here -->
						<!--Flight detail table start here -->
						<div class="payment-table-wrap flight-booking-wrap">
							<table class="invo-payment-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black payemnt-wid text-center">Booking ID</th>
										<th class="font-md color-light-black date-wid text-center">Airlines Name</th>
										<th class="font-md color-light-black trans-wid text-center">Class</th>
										<th class="font-md color-light-black amount-wid text-center">Seat Number</th>
									</tr>
								</thead>
								<tbody>
									<tr class="invo-paye-row">
										<td class="font-sm payment-desc second-color text-center">45123</td>
										<td class="font-sm payment-desc second-color text-center">Air Canada</td>
										<td class="font-sm payment-desc second-color text-center">Business</td>
										<td class="font-sm payment-desc second-color text-center">B1, B2</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Flight detail table end here -->
						<!--Flight table data start here -->
						<div class="table-wrapper flight-detail-table pt-32">
							<table class="invoice-table  ">
								<thead>
									<tr class="invo-tb-header bg-black">
										<th class="font-md flight-details pl-10">Flight Details</th>
										<th class="font-md flight-re-price-wid ">Price</th>
										<th class="font-md flight-re-price-wid ">Qty</th>
										<th class="font-md flight-re-price-wid pr-10 text-right">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm pl-10">Air Canada 1S-2539 Toronto - Sydney</td>
										<td class="font-sm text-center">$1250</td>
										<td class="font-sm text-center">2</td>
										<td class="font-sm text-right pr-10">$2500.00</td>
									</tr>
								</tbody>
							</table> 
						</div>
						<!--Flight table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="bus-term-cond-content">
								<h2 class="d-none">Invoice</h2>
								<h3 class="font-md color-light-black">Terms & Condition:</h3>
								<div class="term-condi-list pt-10">
									<ul class="term-con-list">
										<li class="font-sm">When traveling, keep a print out of your ticket.</li>
										<li class="font-sm">Please keep your id proof when traveling.</li>
										<li class="font-sm">10% cancellation charge will be applied on total.</li>
										<li class="font-sm">A person cannot take more than 20 kg of luggage.</li>
										<li class="font-sm">It's your responsibility if you miss that flight..</li>
									</ul>
								</div>
							</div>
							<div class="invo-bill-total">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-right ">$2500.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black">Tax <span class="color-grey ">(18%)</span></td>
											<td class="font-md-grey color-grey text-right">$450.00</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="color-blue-flight font-lg pt-20">Grand Total:</td>
											<td class="font-18-500 color-light-black pt-20 text-right">$2950.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<div class="signature-wrap-flight">
							<div class="sign-img">
								<img src="{{asset('assets/invoice//images/signature/sign.svg')}}" alt="this is signature image">
							</div>
							<p class="font-sm-500">Alex Morris</p>
							<h3 class="font-md-grey color-light-black">Airlines Manager</h3>
						</div>
						<!--Flight contact us detail start here -->
						<div class="flight-contact-mail-wrap">
							<div class="bus-invo-num Flight-contact">
								<span class="bus-conatct-img"><img src="{{asset('assets/invoice//images/flight/phone-img.svg')}}" alt="this is call image"></span>
								<a class="font-18 color-light-black" href="tel:+12345678899">+1 234 567 8899</a>
							</div>
							<div class="bus-invo-date flight-mail">
								<span class="bus-mail-img"><img src="{{asset('assets/invoice//images/flight/mail-img.svg')}}" alt="this is mail image"></span>
								<a class="font-18 color-light-black" href="mailto:contact@invoice.com">contact@invoice.com</a>
							</div>
						</div>
						<!--Flight contact us detail end here -->
					</div>
					<!--Flight footer image start here -->
					<div class="footer-img-sec">
						<div class="footer-img1">
							<img src="{{asset('assets/invoice//images/flight/footer-purple-img.png')}}" alt="background-img">
						</div>
						<div class="flight-thanks-bg">
							<p class="">Thank you for choosing to 🛫 travelling 🛬 with us. See you soon 🙂</p>
						</div>
					</div>
					<!--Flight footer image end here -->
				</section>
				<!--Invoice content end here -->
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
	</div>
	<!--Invoice wrap end here -->
	<script src="{{asset('assets/invoice//js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/invoice//js/jspdf.min.js')}}"></script>
	<script src="{{asset('assets/invoice//js/html2canvas.min.js')}}"></script>
	<script src="{{asset('assets/invoice//js/custom.js')}}"></script>
</body>
</html>