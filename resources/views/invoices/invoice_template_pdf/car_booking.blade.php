<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Digital Invoica</title>
	<link href="{{asset('assets/images/favicon/icon.png')}}" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/media-query.css')}}">
</head>
<body>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap car-invoice">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="car-header-img" id="invo_header">
					<div class="invoice-logo-content invoice-logo-content-car ">
						<div class="invoice-logo width-70">
							<a href="car_booking.html" class="logo-car">
								<img src="{{asset('assets/invoice/images/car/logo.png')}}" alt="this is a invoice logo">
							</a>
							<div class="invo-to-wrap pt-40">
								<div class="invoice-to-content">
									<h1 class="d-none">Hidden</h1>
									<p class="font-md color-light-black">Pick-Up Info:</p>
									<h2 class="disply-none">Hidden</h2>
									<p class="font-md-grey color-grey pt-10">35 Roanoke Road, IN 3526, North York, <br>USA
									5 Feb 2022, 9:00 Am</p>
								</div>
							</div>
							<div class="pt-20">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Drop-off Info:</p>
									<h2 class="disply-none">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-10">4510 E Dolphine St, IN 3526 Hills Road, New York, USA<br> 20 Feb 2022, 9:00 Am</p>
								</div>
							</div>
						</div>
						<div class="invo-head-content width-30">
							<h1 class="car-txt">INVOICE</h1>
							<div class="invo-head-wrap pt-15">
								<div class="font-md color-light-black">Invoice No:</div>
								<div class="font-md-grey color-grey">#DI56789</div>
							</div>
							<div class="invo-head-wrap invoi-date-wrap pt-10">
								<div class="font-md color-light-black">Invoice Date:</div>
								<div class="font-md-grey color-grey">15/12/2024</div>
							</div>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start -->
				<section class="agency-service-content car-invoice-content" id="car_booking">
					<div class="container">
						<!--Car booking details start -->
						<div class="invo-car-book-wrap invo-car-book-wrap pt-40">
							<div class="booking-content-wrap car-respon-wrap">
								<div class="invo-book-detail detail-col-car">
									<span class="font-md color-light-black">No of Days:</span>
									<span class="font-md-500 color-dark-yellow">15 Days</span>
								</div>
								<div class="invo-book-detail detail-col-car">
									<span class="font-md color-light-black">KM up to:</span>
									<span class="font-md-500 color-dark-yellow">1500 KM</span>
								</div>
								<div class="invo-book-detail detail-col-car">
									<span class="font-md color-light-black">Price:</span>
									<span class="font-md-500 color-dark-yellow">$65 / Day</span>
								</div>
							</div>
						</div>
						<!--Car booking details end -->
						<!--Car booking details function start -->
						<div class="invo-car-book-wrap1 pt-40">
							<div class="booking-content-wrap">
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Car:</span>
									<span class="font-sm"> Creta (Hyundai)</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Category:</span>
									<span class="font-sm"> Economy</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Type:</span>
									<span class="font-sm">4 Seat Economy</span>
								</div>
							</div>
							<div class="booking-content-wrap second-row">
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Start Date: </span>
									<span class="font-sm"> 15 April 2023</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">End Date:</span>
									<span class="font-sm">30 April 2023</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Drive Mode:</span>
									<span class="font-sm">Manually</span>
								</div>
							</div>
							<div class="booking-content-wrap second-row">
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Out Km:</span>
									<span class="font-sm">1800 Km</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">In Km:</span>
									<span class="font-sm">3300 Km</span>
								</div>
								<div class="invo-book-detail detail-col-car1">
									<span class="font-sm-700 color-light-black">Security Deposit:</span>
									<span class="font-sm">$3000</span>
								</div>
							</div>
						</div>
						<!--Car booking details function end -->
						<!--Hire details start -->
						<div class="money-send-title-wrap hire-mt pt-40">
							<h2 class="d-none">Hidden</h2>
							<h3 class="font-lg color-dark-yellow transfer-title">Hire’s Info</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Name:</span>
										<span class="font-sm">Alex Smith</span>
									</div>
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Date of Birth:</span>
										<span class="font-sm">05 Frb 1981</span>
									</div>
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Contact:</span>
										<span class="font-sm">+1-234-567-8899</span>
									</div>
								</div>
								<div class="mon-send-right-data">
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Account Number:</span>
										<span class="font-sm">TB5689451236</span>
									</div>
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Passport No:</span>
										<span class="font-sm">AA123456</span>
									</div>
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Address:</span>
										<span class="font-sm">2 Honk Road, New York, USA</span>
									</div>
								</div>
							</div>
						</div>
						<!--Hire details end -->
						<!--Drivers info details start -->
						<div class="money-send-title-wrap pt-40">
							<h3 class="font-lg color-dark-yellow transfer-title ">Driver’s Info</h3>
							<div class="mon-sent-content-wrap">
								<div class="mon-send-left-data">
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Driver Name:</span>
										<span class="font-sm">Alex Smith</span>
									</div>
									<div class="mon-send-col-one">
										<span class="font-sm-500 color-light-black">Driving License No:</span>
										<span class="font-sm">LM25080</span>
									</div>
								</div>
								<div class="mon-send-right-data">
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Contact:</span>
										<span class="font-sm">+1-234-567-8899</span>
									</div>
									<div class="mon-send-col-two">
										<span class="font-sm-500 color-light-black">Expire Date:</span>
										<span class="font-sm">20 April 2028</span>
									</div>
								</div>
							</div>
						</div>
						<!--Drivers info details end -->
						<!--Car detail table start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table car-detail-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black font-sm flight-details ">Details</th>
										<th class="font-md color-light-black flight-re-price-wid ">Price</th>
										<th class="font-md color-light-black flight-re-price-wid  ">Days</th>
										<th class="font-md color-light-black flight-re-price-wid text-right ">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row ">
										<td class="font-sm">Rent for 15 Day (Inclusive of theft protection and <br>Collision Damage Waiver)</td>
										<td class="font-sm text-center">$65</td>
										<td class="font-sm text-center">15</td>
										<td class="font-sm text-right">$975.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Car detail table end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap invo-addition-wrap-car pt-20">
							<div class="invo-add-info-content width-50">
								<h3 class="font-md color-light-black">Additional Information:</h3>
								<p class="add-info-desc inter-400 mtb-0 font-sm pt-10">A ut vitae nullam risus at. Justo enim nisi elementum ac. Massa molestie metus vitae ornare turpis donec odio sollicitudin. Ac ut tellus eu donec dictum risus blandit. Quam diam dictum amet.</p>
							</div>
							<div class="invo-bill-total width-30">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="ifont-md-grey color-grey text-right">$975.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black">Tax <span class="invo-total-data inter-700 medium-font second-color">(18%)</span></td>
											<td class="font-md-grey color-grey text-right">$175.50 </td>
										</tr>
										<tr class="invo-grand-total">
											<td class="color-dark-yellow font-18-700 pt-20">Grand Total:</td>
											<td class="font-md-grey color-grey text-right pt-20">$1150.50</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<!-- Car payment detail table start here -->
						<div class="rest-payment-bill-fitness pt-40">
							<div class="fitness-sec p-0">
								<div class="payment-wrap payment-wrap-car-details ">
									<table class="res-pay-table res-pay-table-car">
										<tbody>
											<tr class="pay-data">
												<td class="pay-type font-md color-light-black">Payment Details:</td>
												<td class="font-md-grey color-grey pr-20">Credit Card **928</td>
											</tr>
											<tr class="pay-data table-bg">
												<td class="pay-type font-md color-light-black">Date:</td>
												<td class="font-md-grey color-grey pr-20">30/11/2022</td>
											</tr>
											<tr class="pay-data">
												<td class="pay-type font-md color-light-black">Transaction ID:</td>
												<td class="font-md-grey color-grey pr-20">TD23651456</td>
											</tr>
											<tr class="pay-data table-bg">
												<td class="pay-type font-md color-light-black">Amount:</td>
												<td class="font-md-grey color-grey pr-20">$1150.50</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="signature-wrap-fitness width-30">
									<div class="signature-content">
										<div class="sign-img">
											<img src="{{asset('assets/invoice/images/signature/sign.svg')}}" alt="this is signature image">
										</div>
										<p class="font-sm-500 text-center pt-10">Alex Morris</p>
										<h3 class="font-md-grey color-light-black text-center pt-10">Rental Manager</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- Car payment detail table end here -->
					</div>
					<!--Car contact us detail start here -->
					<div class="car-bottom-sec">
						<div class="bus-conta-mail-wrap car-conta-mail-wrap ">
							<div class="bus-invo-num car-contact">
								<span class="bus-conatct-img"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#FFA801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#FFA801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#FFA801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#FFA801"></rect></clipPath></defs></svg></span>
								<a class="font-18 color-light-black" href="tel:+12345678899">+1 234 567 8899</a>
							</div>
							<div class="bus-invo-date car-mail">
								<span class="bus-mail-img"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#FFA801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#FFA801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#FFA801"></rect></clipPath></defs></svg></span>
								<a class="font-18 color-light-black" href="mailto:contact@invoice.com">contact@invoice.com</a>
							</div>
						</div>
						<div class="text-center pt-30 car-bottom">
							<p class="font-sm color-light-black">Thank you for choosing to 🚗 travelling 🚗 with us. See you soon 🙂</p>
						</div>
					</div>
					<!--Car contact us detail end here -->
				</section>
				<!--Invoice content end  -->
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