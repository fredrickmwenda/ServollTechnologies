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
	<!--Invoice wrap start here -->
	<div class="invoice_wrap bus-invoice">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start Here -->
				<header class="bus-header " id="invo_header">
					<div class="bus-header-img">
						<img src="{{asset('assets/invoice/images/bus/black-img1.svg')}}" alt="background-img" class="wid-100">
						<img src="{{asset('assets/invoice/images/bus/pink-img.svg')}}" alt="background-img" class="pink-img">
						<img src="{{asset('assets/invoice/images/bus/black-img2.svg')}}" alt="background-img">
					</div>
					<div class="container">
						<div class="bus-header-logo res-contact">
							<div class="wid-50">
								<a href="bus_booking.html" class="logo"><img src="{{asset('assets/invoice/images/bus/logo.png')}}" alt="this is a invoice logo"></a>
								<div class="pt-20">
									<div class="invo-cont-wrap invo-contact-wrap">
										<div class="invo-social-icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#E11D48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#E11D48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#E11D48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#E11D48"></rect></clipPath></defs></svg>
										</div>
										<div class="invo-social-name">
											<a href="tel:+12345678899" class="font-18 color-light-black">+1 234 567 8899</a>
										</div>
									</div>
									<div class="invo-cont-wrap pt-10">
										<div class="invo-social-icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#E11D48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#E11D48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#E11D48"></rect></clipPath></defs></svg>
										</div>
										<div class="invo-social-name">
											<a href="mailto:contact@invoice.com" class="font-18 color-light-black">contact@invoice.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="wid-50">
								<h1 class="bus-txt">INVOICE</h1>
								<div class="invoice-agency-details">
									<div class="invo-head-wrap">
										<div class="color-light-black font-md wid-40 ">Invoice No:</div>
										<div class="font-md-grey color-grey wid-20">#DI56789</div>
									</div>
									<div class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency">
										<div class="color-light-black font-md wid-40 ">Invoice Date:</div>
										<div class="font-md-grey color-grey wid-20 ">15/12/2024</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!--Header end Here -->
				<!--Invoice content start here -->
				<section class="bus-booking-content" id="bus_booking">
					<div class="container">
						<!--Invoice owner name content start here -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Passenger Info:</p>
									<h2 class="font-lg color-pink pt-10">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Agency Info:</p>
									<h2 class="font-lg color-pink pt-10">Digital Invoico Busline</h2>
									<p class="font-md-grey color-grey pt-10">4510 E Dolphine St, IN 3526<br> Hills Road, New York, USA</p>
								</div>
							</div>
						</div>
						<!--Invoice owner name content end here -->
						<!--Bus timing content start here -->
						<div class="invoice-timing-wrap pt-40">
							<div class="invo-time-col">
								<div class="booking-info column-one">
									<p class="font-sm"><b class="color-light-black circle font-sm-700">From: </b>24 Avon street, 4th Parkon, New York</p>
									<p class="font-sm mtb-14"><b class="color-light-black circle font-sm-700">To: </b>outhgate LRT Bus Stop 2217, New York</p>
								</div>
							</div>
							<div class="invo-time-col">
								<div class="booking-info">
									<p class="font-sm"><b class="color-light-black circle font-sm-700">Depart Time: </b>10:00 AM</p>
									<p class="font-sm mtb-14"><b class="color-light-black circle font-sm-700">Arrive Time: </b>1:00 PM</p>
								</div>
							</div>
						</div>
						<!--Bus timing content end here -->
						<!--Bus detail start here -->
						<div class="bus-detail-wrap bus-detail-sec">
							<div class="bus-detail-col border-bottom">
								<div class="font-md color-light-black bus-type">Bus Type:</div>
								<div class="font-md-grey color-grey">Volvo AC</div>
							</div>
							<div class="bus-detail-col border-bottom">
								<div class="font-md color-light-black bus-type">Bus Number:</div>
								<div class="font-md-grey color-grey">10DIB</div>
							</div>
							<div class="bus-detail-col seat-col">
								<div class="font-md color-light-black bus-type">Seat No:</div>
								<div class="font-md-grey color-grey">A1, A2</div>
							</div>
							<div class="bus-detail-col ticket-col">
								<div class="font-md color-light-black bus-type">Ticket Pnr:</div>
								<div class="font-md-grey color-grey">23156-89512</div>
							</div>
						</div>
						<!--Bus detail end here -->
						<!--Invoice table data start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table bus-detail-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black width-50 ">Details</th>
										<th class="font-md color-light-black re-price-wid text-center">Price</th>
										<th class="font-md color-light-black re-qty-wid text-center">Qty</th>
										<th class="font-md color-light-black tota-wid text-right">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">Delux Business Seat - 10:00 AM Sat</td>
										<td class="font-sm color-grey text-center">$120</td>
										<td class="font-sm color-grey text-center">2</td>
										<td class="font-sm color-grey text-right">$240.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Invoice table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content bus-term-cond-content">
								<h3 class="font-md color-light-black">Terms & Condition:</h3>
								<div class="term-condi-list pt-10">
									<ul class="term-con-list">
										<li class="font-sm ">When traveling, keep a print out of your ticket.</li>
										<li class="font-sm ">Please keep your id proof when traveling.</li>
										<li class="font-sm ">Come to the bus counter 5 minutes before the bus leaves.</li>
										<li class="font-sm ">A person cannot take more than 30 kg of luggage.</li>
										<li class="font-sm ">To return the ticket, you must be informed at least 2 days in advance.</li>
									</ul>
								</div>
							</div>
							<div class="invo-bill-total bus-invo-total  ">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-right">$240.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black">Tax <span class="font-md color-grey">(18%)</span></td>
											<td class="font-md-grey color-grey text-right">$43.20</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="font-18-700 color-pink pt-20">Grand Total:</td>
											<td class="font-18-500 pt-20 color-light-black text-right" >$283.20</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<div class="res-contact res-bottom">
							<p class="font-sm color-light-black text-center">Thank you for choosing to dine with us. See you soon 🙂</p>
						</div>
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
				<!--Note content start-->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content End-->
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