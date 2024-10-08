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
	<div class="invoice_wrap restaurant">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="bg-yellow restaurant-header" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo-details wid-50">
							<a href="restaurant_bill.html" class="restaurant-logo"><img src="{{asset('assets/invoice/images/hotel/restaurant-logo.png" alt="this is a invoice logo"></a>
							<div class="res-contact">
								<div class="invo-cont-wrap invo-contact-wrap">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="tel:+12345678899" class="font-18">+1 234 567 8899</a>
									</div>
								</div>
								<div class="invo-cont-wrap pt-10">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 7L12 13L21 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="mailto:contact@invoice.com" class="font-18">contact@invoice.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-logo-res wid-50">
							<a href="restaurant_bill.html" class="logo"><img src="{{asset('assets/invoice/images/hotel/restaurant-header-img.png')}}" alt="this is a invoice logo"></a>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="agency-service-content restaurant-invoice-content" id="restaurant_bill">
					<div class="container">
						<div class="bus-invo-no-date-wrap">
							<div class="bus-invo-num">
								<span class="font-md color-light-black">Invoice No:</span>
								<span class="font-md-grey color-light-black">#DI56789</span>
							</div>
							<div class="bus-invo-date">
								<span class="font-md color-light-black">Invoice Date:</span>
								<span class="font-md-grey color-light-black">30/11/2022</span>
							</div>
						</div>
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap pt-20">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Invoice To:</p>
									<h1 class="font-lg color-yellow pt-10">Jordon Smith</h1>
									<p class="font-md-grey color-grey pt-10">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Pay To:</p>
									<h2 class="font-lg color-yellow pt-10">Digital Invoico Restaurant</h2>
									<p class="font-md-grey color-grey pt-10">4510 E Dolphine St, IN 3526<br> Hills Road, New York, USA</p>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->
						<!--Invoice table data start here -->
						<div class="table-wrapper res-contact">
							<table class="invoice-table restaurant-table">
								<thead>
									<tr class="invo-tb-header bg-yellow">
										<th class="font-md color-light-black res-no  pl-10">S. No.</th>
										<th class="font-md color-light-black w-40">Description</th>
										<th class="font-md color-light-black res-pric text-center">Price</th>
										<th class="font-md color-light-black res-qty text-center">Qty</th>
										<th class="font-md color-light-black res-total text-center ">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">1</td>
										<td class="font-sm color-grey">Easy Chicken Masala</td>
										<td class="font-sm color-grey text-center">$120</td>
										<td class="font-sm color-grey text-center">2</td>
										<td class="font-sm color-grey text-center">$900.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">2</td>
										<td class="font-sm color-grey">Boiled Egg</td>
										<td class="font-sm color-grey text-center">$40</td>
										<td class="font-sm color-grey text-center">2</td>
										<td class="font-sm color-grey text-center">$80.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">3</td>
										<td class="font-sm color-grey">Stuffed Strawberry</td>
										<td class="font-sm color-grey text-center">$80</td>
										<td class="font-sm color-grey text-center">1</td>
										<td class="font-sm color-grey text-center">$80.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">4</td>
										<td class="font-sm color-grey">Paneer Tikka</td>
										<td class="font-sm color-grey text-center">$250</td>
										<td class="font-sm color-grey text-center">1</td>
										<td class="font-sm color-grey text-center">$250.00</td>
									</tr>
									<tr class="invo-tb-row">
										<td class="font-sm color-grey">5</td>
										<td class="font-sm color-grey">Onion Pizza</td>
										<td class="font-sm color-grey text-center">$160</td>
										<td class="font-sm color-grey text-center">2</td>
										<td class="font-sm color-grey text-center">$320.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Invoice table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content">
								<h3 class="font-md color-light-black">Additional Information:</h3>
								<p class="font-sm pt-10">A ut vitae nullam risus at. Justo enim nisi elementum ac. Massa molestie metus vitae ornare turpis donec odio sollicitudin. Ac ut tellus eu donec dictum risus blandit. Quam diam dictum amet.</p>
							</div>
							<div class="invo-bill-total desc-wid">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-center">$970.00</td>
										</tr>
										<tr class="tax-row">
											<td class="font-md color-light-black">Tax <span class="font-md color-grey">(18%)</span></td>
											<td class="font-md-grey color-grey text-center">$174.60</td>
										</tr>
										<tr class="disc-row bottom-border">
											<td class="font-md color-light-black">Discount</td>
											<td class="font-md-grey color-grey text-center">- $50.00</td>
										</tr>
										<tr class="invo-grand-total">
											<td class="color-yellow font-18-700 pt-20">Grand Total:</td>
											<td class="font-18-500 color-light-black pt-20 text-center">$1094.60</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<!--Payment detail table start here -->
						<div class="rest-payment-bill">
							<div class="payment-wrap payment-wrap-res p-0">
								<table class="res-pay-table">
									<tbody>
										<tr class="table-bg">
											<td class="font-md color-light-black pay-type">Payment Details:</td>
											<td class="font-md-grey color-grey pay-type">Credit Card **928</td>
										</tr>
										<tr class="">
											<td class="font-md color-light-black pay-type">Date:</td>
											<td class="font-md-grey color-grey">30/11/2022</td>
										</tr>
										<tr class="table-bg">
											<td class="font-md color-light-black pay-type">Transaction ID:</td>
											<td class="font-md-grey color-grey">TD23651456</td>
										</tr>
										<tr class="">
											<td class="font-md color-light-black pay-type">Amount:</td>
											<td class="font-md-grey color-grey">$1094.60</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="signature-wrap">
								<div class="sign-img">
									<img src="{{asset('assets/invoice/images/signature/sign.svg')}}" alt="this is signature image">
								</div>
								<p class="font-sm-500">Alex Morris</p>
								<h3 class="font-md-grey color-light-black">Restaurant Manager</h3>
							</div>
						</div>
						<!--Payment detail table end here -->
						<div class="res-contact res-bottom">
							<p class="font-sm color-light-black text-center">Thank you for choosing to dine with us. See you soon 🙂</p>
						</div>
					</div>
				</section>
				<!--Invoice content end here -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<div class="container">
					<!--Print-download content start here -->
					<div class="invo-buttons-wrap">
						<div class="invo-print-btn invo-btns">
							<a href="javascript:window.print()" class="print-btn">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_313)">
									<path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_313"><rect width="24" height="24" fill="white"/>
									</clipPath></defs>
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
					<!--Note content start here -->
					<div class="invo-note-wrap">
						<div class="note-title">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
							</clipPath></defs></svg>
							<span class="font-md color-light-black">Note:</span>
						</div>
						<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
					</div>
					<!--Note content end here -->
				</div>
			</section> 
			<!--bottom content end here -->
		</div>
	</div>
	<!--Invoice wrap End here -->
	<script src="{{asset('assets/invoice/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/jspdf.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/html2canvas.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/custom.js')}}"></script>
</body>
</html>	