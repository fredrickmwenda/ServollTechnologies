<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Digital Invoica</title>
	<link href="{{asset('assets/invoice//favicon/icon.png')}}" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('assets/invoice/css/media-query.css')}}">
</head>
<body>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap internet">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="internet-header" id="invo_header">
					<div class="internet-content">
						<div><h1 class="internet-txt">INVOICE</h1></div>
						<div class="internet-invoice pt-15">
							<div class="invo-head-wrap">
								<div class="color-white font-md">Invoice No:</div>
								<div class="font-md-grey color-white">#DI56789</div>
							</div>
							<div class="invo-head-wrap invoi-date-wrap invoi-date-wrap-agency">
								<div class="color-white font-md">Invoice Date:</div>
								<div class="font-md-grey color-white">15/12/2024</div>
							</div>
						</div>
					</div>
				</header>
				<!--Header end Here -->
				<!--Invoice content start here -->
				<section class="ticket-booking-content" id="internet_invoice">
					<div class="container">
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="font-sm-700 color-light-black">Bill To:</p>
									<h2 class="font-18-700 color-green">Jordon Smith</h2>
									<p class="font-md-grey color-grey pt-15">Phone: +1 562 563 8899 <br> Email: jordon123@mail.com</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<div>
										<a href="internet_invoice.html"><img src="{{asset('assets/invoice/images/internet/logo.png')}}" alt="logo"></a>
									</div>
									<p class="font-md-grey color-grey pt-15">4510 E Dolphine St, IN 3526<br> Hills Road, New York, USA</p>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->
						<!--Internet details Start -->
						<div class="invo-car-book-wrap1 mt pt-40">
							<div class="booking-content-wrap">
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">ID:</span>
									<span class="font-sm">jordon_123</span>
								</div>
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">Plan ID:</span>
									<span class="font-sm">DI923514</span>
								</div>
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">Package:</span>
									<span class="font-sm">Monthly</span>
								</div>
							</div>
							<div class="booking-content-wrap second-row">
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">Due Date:</span>
									<span class="font-sm">30 May 2023</span>
								</div>
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">Net Speed:</span>
									<span class="font-sm">80Mbps</span>
								</div>
								<div class="invo-book-detail detail-col-car1 internet-bg">
									<span class="font-sm-700 color-light-black">Balance Due:</span>
									<span class="font-sm">$280</span>
								</div>
							</div>
						</div>
						<!--Internet details End -->
						<!--Internet table data start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table internet-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black ">Sr No</th>
										<th class="font-md color-light-black details-width ">Details</th>
										<th class="font-md color-light-black ">Period Date</th>
										<th class="font-md color-light-black ">Amount</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row ">
										<td class="font-sm">1</td>
										<td class="font-sm">Monthly bandwidth usages - 230GB</td>
										<td class="font-sm">01 May to 31 May</td>
										<td class="font-sm">$80.00</td>
									</tr>
									<tr class="invo-tb-row table-bg">
										<td class="font-sm">2</td>
										<td class="font-sm">IP TV</td>
										<td class="font-sm">01 May to 31 May</td>
										<td class="font-sm">$50.00</td>
									</tr>
									<tr class="invo-tb-row ">
										<td class="font-sm">3</td>
										<td class="font-sm">Equipment rental</td>
										<td class="font-sm">01 May to 31 May</td>
										<td class="font-sm">$100.00</td>
									</tr>
									<tr class="invo-tb-row table-bg">
										<td class="font-sm">4</td>
										<td class="font-sm">Government fee & taxes (30%)</td>
										<td class="font-sm"></td>
										<td class="font-sm">$30.00</td>
									</tr>
									<tr class="invo-tb-row ">
										<td class="font-sm">5</td>
										<td class="font-sm">Monthly services</td>
										<td class="font-sm"></td>
										<td class="font-sm">$10.00</td>
									</tr>
									<tr class="invo-tb-row table-bg">
										<td class="font-sm">6</td>
										<td class="font-sm">Others</td>
										<td class="font-sm"></td>
										<td class="font-sm">$10.00</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Internet table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap invo-addition-wrap-internet pt-20">
							<div class="invo-add-info-content invo-add-info-content-internet">
								<h3 class="font-18-700 color-light-black">Pay By:</h3>
								<div class="pt-10" >
									<div>
										<span class="font-sm-500 color-light-black">Credit Card:</span>
										<span class="font-sm">**** **** **** **23</span>
									</div>
									<div>
										<span class="font-sm-500 color-light-black">Amount:</span>
										<span class="font-sm">$280</span>
									</div>
									<div>
										<span class="font-sm-500 color-light-black">Date:</span>
										<span class="font-sm">28 April 2023</span>
									</div>
								</div>
							</div>
							<div class="invo-bill-total invo-bill-total-internet">
								<table class="invo-total-table">
									<tbody>
										<tr>
											<td class="font-md color-light-black">Sub Total:</td>
											<td class="font-md-grey color-grey text-right pr-10">$280.00</td>
										</tr>
										<tr class="tax-row bottom-border">
											<td class="font-md color-light-black">Discount</td>
											<td class="font-md-grey color-grey text-right pr-10">$0.00</td>
										</tr>
										<tr class="invo-grand-total bottom-border">
											<td class="font-md color-green pt-20">Grand Total:</td>
											<td class="font-18-500 color-grey pt-20 text-right pr-10">$280.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--Invoice additional info end here -->
						<!--Internet must read start here -->
						<div class="invo-addition-wrap pt-40">
							<div class="invo-add-info-content-internet">
								<h3 class="font-md color-light-black">Must Read:</h3>
								<p class="font-sm pt-10">Ultrices tempor nibh elit cursus euismod cursus. Auctor in maecenas amet etiam faucibus. Proin sit viverra velit vitae enim in elementum diam a. Adipiscing euismod sed quis malesuada lorem tellus congue in donec. In fringilla mauris condimentum massa leo. In duis pellentesque viverra rhoncus tellus risus pretium.</p>
							</div>
						</div>
						<!--Internet must read end here -->
					</div>
					<!--Invoice internet images start here -->
					<div class="internet-images">
						<div class="internet-bottom-sec">
							<div class="invo-cont-wrap invo-contact-wrap">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#12151C"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="tel:+12345678899" class="font-18 color-grey">+1 234 567 8899</a>
								</div>
							</div>
							<div class="invo-cont-wrap invo-contact-photo">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#12151C"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="mailto:contact@invoice.com" class="font-18 color-grey">contact@invoice.com</a>
								</div>
							</div>
							<div class="invo-cont-wrap invo-contact-photo">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_132_937)">
											<path d="M9 11C9 11.7956 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7956 15 11C15 10.2044 14.6839 9.44129 14.1213 8.87868C13.5587 8.31607 12.7956 8 12 8C11.2044 8 10.4413 8.31607 9.87868 8.87868C9.31607 9.44129 9 10.2044 9 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M17.657 16.657L13.414 20.9C13.039 21.2746 12.5306 21.4851 12.0005 21.4851C11.4704 21.4851 10.962 21.2746 10.587 20.9L6.343 16.657C5.22422 15.5382 4.46234 14.1127 4.15369 12.5609C3.84504 11.009 4.00349 9.40053 4.60901 7.93874C5.21452 6.47696 6.2399 5.22755 7.55548 4.34852C8.87107 3.46949 10.4178 3.00031 12 3.00031C13.5822 3.00031 15.1289 3.46949 16.4445 4.34852C17.7601 5.22755 18.7855 6.47696 19.391 7.93874C19.9965 9.40053 20.155 11.009 19.8463 12.5609C19.5377 14.1127 18.7758 15.5382 17.657 16.657Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
										<defs>
											<clipPath id="clip0_132_937">
												<rect width="24" height="24" fill="white"/>
											</clipPath>
										</defs>
									</svg>
								</div>
								<div class="invo-social-name">
									<p class="font-md-grey color-light-black">4510 E Dolphine St, IN 3526 Hills Road, New York, USA</p>
								</div>
							</div>
						</div>
						<div class="internet-bottom-sec">
							<div class="black-footer-img-sec"><img src="{{asset('assets/invoice/images/internet/footer-black-img.svg')}}" alt="background-img"></div>
						</div>
					</div>
					<!--Invoice internet images end here -->
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
	<!--Invoice Wrap End here -->
	<script src="{{asset('assets/invoice/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/jspdf.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/html2canvas.min.js')}}"></script>
	<script src="{{asset('assets/invoice/js/custom.js')}}"></script>
</body>
</html>