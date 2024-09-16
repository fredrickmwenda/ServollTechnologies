
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ url('/') }}" class="d-block text-decoration-none position-relative">
            <img src="{{ getLogoUrl() }}" alt="logo-icon">
           
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-item">
                <a href="{{ url('/')}}" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">date_range</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
           
           

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">note_stack</span>
                    <span class="title">Front Pages</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="landing-page.html" class="menu-link">
                            Home
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="features.html" class="menu-link">
                            Features
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="our-team.html" class="menu-link">
                            Our Team
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="faqs.html" class="menu-link">
                            FAQ’s
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="contact.html" class="menu-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">APPS</span>
            </li>

            <li class="menu-item">
                <a href="calender.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">date_range</span>
                    <span class="title">Calender</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="to-do-list.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">format_list_bulleted</span>
                    <span class="title">To Do List</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="contacts.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">contact_page</span>
                    <span class="title">Contacts</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="chat.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">chat</span>
                    <span class="title">Chat</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">mail</span>
                    <span class="title">Email</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="inbox.html" class="menu-link">
                            Inbox
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="compose.html" class="menu-link">
                            Compose
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="read-email.html" class="menu-link">
                            Read Email
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="snooozed.html" class="menu-link">
                            Snooozed
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="draft.html" class="menu-link">
                            Draft
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sent-mail.html" class="menu-link">
                            Sent Mail
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="trash-email.html" class="menu-link">
                            Trash
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="spam.html" class="menu-link">
                            Spam
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="starred.html" class="menu-link">
                            Starred
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="important.html" class="menu-link">
                            Important
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="kanban-board.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">space_dashboard</span>
                    <span class="title">Kanban Board</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">folder</span>
                    <span class="title">File Manager</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="file-manager.html" class="menu-link">
                            My Drive
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="assets.html" class="menu-link">
                            Assets
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="projects.html" class="menu-link">
                            Projects
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="personal.html" class="menu-link">
                            Personal
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="applications.html" class="menu-link">
                            Applications
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="media.html" class="menu-link">
                            Media
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">PAGES</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">shopping_cart</span>
                    <span class="title">eCommerce</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="products-grid.html" class="menu-link">
                            Products Grid
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="products-list.html" class="menu-link">
                            Products List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="product-details.html" class="menu-link">
                            Product Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-product.html" class="menu-link">
                            Create Product
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="edit-product.html" class="menu-link">
                            Edit Product
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cart.html" class="menu-link">
                            Cart
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="checkout.html" class="menu-link">
                            Checkout
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="orders.html" class="menu-link">
                            Orders
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="order-details.html" class="menu-link">
                            Order Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-order.html" class="menu-link">
                            Create Order
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="order-tracking.html" class="menu-link">
                            Order Tracking
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="customers.html" class="menu-link">
                            Customers
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="customer-details.html" class="menu-link">
                            Customer Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="categories.html" class="menu-link">
                            Categories
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sellers.html" class="menu-link">
                            Sellers
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="seller-details.html" class="menu-link">
                            Seller Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-seller.html" class="menu-link">
                            Create Seller
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reviews.html" class="menu-link">
                            Reviews
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="refunds.html" class="menu-link">
                            Refunds
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">handshake</span>
                    <span class="title">CRM</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="contacts-2.html" class="menu-link">
                            Contacts
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="customers-2.html" class="menu-link">
                            Customers
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="leads.html" class="menu-link">
                            Leads
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="deals.html" class="menu-link">
                            Deals
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">content_paste</span>
                    <span class="title">Project Management</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="project-overview.html" class="menu-link">
                            Project Overview
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="project-list.html" class="menu-link">
                            Project List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-project.html" class="menu-link">
                            Create Project
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="clients.html" class="menu-link">
                            Clients
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="teams.html" class="menu-link">
                            Teams
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="kanban-board-2.html" class="menu-link">
                            Kanvan Board
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="user.html" class="menu-link">
                            User
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">auto_stories</span>
                    <span class="title">LMS</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="courses-list.html" class="menu-link">
                            Courses List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="course-details.html" class="menu-link">
                            Course Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="lesson-preview.html" class="menu-link">
                            Lesson Preview
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-course.html" class="menu-link">
                            Create Course
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="edit-course.html" class="menu-link">
                            Edit Course
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="instructors.html" class="menu-link">
                            Instructors
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">support</span>
                    <span class="title">Help Desk</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="tickets.html" class="menu-link">
                            Tickets
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ticket-details.html" class="menu-link">
                            Ticket Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="agents.html" class="menu-link">
                            Agents
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reports.html" class="menu-link">
                            Reports
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">local_activity</span>
                    <span class="title">Events</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="events.html" class="menu-link">
                            Events
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="events-list.html" class="menu-link">
                            Events List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="event-details.html" class="menu-link">
                            Event Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-an-event.html" class="menu-link">
                            Create An Event
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="edit-an-event.html" class="menu-link">
                            Edit An Event
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">share</span>
                    <span class="title">Social</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="profile.html" class="menu-link">
                            Profile
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="settings.html" class="menu-link">
                            Settings
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">content_paste</span>
                    <span class="title">Invoice</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="invoice-list.html" class="menu-link">
                            Invoice List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="invoice-details.html" class="menu-link">
                            Invoice Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-invoice.html" class="menu-link">
                            Create Invoice
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="edit-invoice.html" class="menu-link">
                            Edit Invoice
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">group_add</span>
                    <span class="title">Users</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="team-members.html" class="menu-link">
                            Team Members
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="users-list.html" class="menu-link">
                            Users List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="add-user.html" class="menu-link">
                            Add User
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">Profile</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="user-profile.html" class="menu-link">
                            User Profile
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="teams-2.html" class="menu-link">
                            Teams
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="my-projects.html" class="menu-link">
                            Projects
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="starter.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">star</span>
                    <span class="title">Starter</span>
                </a>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MODULES</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">add_reaction</span>
                    <span class="title">Icons</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="material-icons.html" class="menu-link">
                            Material Icons
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="feathericon.html" class="menu-link">
                            Feathericon
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="remixicon.html" class="menu-link">
                            Remixicon
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item open">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">gallery_thumbnail</span>
                    <span class="title">UI Elements</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="alerts.html" class="menu-link">
                            Alerts
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="avatar.html" class="menu-link">
                            Avatar
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="buttons.html" class="menu-link">
                            Buttons
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="badges.html" class="menu-link">
                            Badges
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards.html" class="menu-link">
                            Cards
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="carousels.html" class="menu-link active">
                            Carousels
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dropdowns.html" class="menu-link">
                            Dropdowns
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="grids.html" class="menu-link">
                            Grids
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="images.html" class="menu-link">
                            Images
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="list.html" class="menu-link">
                            List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modals.html" class="menu-link">
                            Modals
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="navs.html" class="menu-link">
                            Navs
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="paginations.html" class="menu-link">
                            Paginations
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="popover-tooltips.html" class="menu-link">
                            Popover Tooltips
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="progess.html" class="menu-link">
                            Progess
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="spinners.html" class="menu-link">
                            Spinners
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tabs.html" class="menu-link">
                            Tabs
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="accoridions.html" class="menu-link">
                            Accoridions
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="date-time-picker.html" class="menu-link">
                            Date/Time Picker
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="videos.html" class="menu-link">
                            Videos
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">table</span>
                    <span class="title">Tables</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="basic-table.html" class="menu-link">
                            Basic Table
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="data-tables.html" class="menu-link">
                            Data Table
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">clarify</span>
                    <span class="title">Forms</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="basic-elements.html" class="menu-link">
                            Basic Elements
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="advanced-elements.html" class="menu-link">
                            Advanced Elements
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="validation.html" class="menu-link">
                            Validation
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="wizard.html" class="menu-link">
                            Wizard
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="editors.html" class="menu-link">
                            Editors
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="file-upload.html" class="menu-link">
                            File Upload
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="apex-charts.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">donut_large</span>
                    <span class="title">Apex Charts</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">lock</span>
                    <span class="title">Authentication</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="login.html" class="menu-link">
                            Login
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="register.html" class="menu-link">
                            Register
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://templates.envytheme.com/trezo/signin-signup.html" class="menu-link">
                            Signin - Signup
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reset-password.html" class="menu-link">
                            Reset Password
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forget-password.html" class="menu-link">
                            Forget Password
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="lock-screen.html" class="menu-link">
                            Lock Screen
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="logout.html" class="menu-link">
                            Log Out
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="confirm-mail.html" class="menu-link">
                            Confirm Mail
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">featured_video</span>
                    <span class="title">Extra Pages</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="pricing-plan.html" class="menu-link">
                            Pricing Plan
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="faq.html" class="menu-link">
                            FAQ
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="timeline.html" class="menu-link">
                            Timeline
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="animation.html" class="menu-link">
                            Animation
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="clip-board.html" class="menu-link">
                            Clip Board
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="drag-drop.html" class="menu-link">
                            Drag & Drop
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="range-slider.html" class="menu-link">
                            Range Slider
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ratings.html" class="menu-link">
                            Ratings
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="toasts.html" class="menu-link">
                            Toasts
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="check-radio.html" class="menu-link">
                            Check & Radio
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sweet-alarts.html" class="menu-link">
                            Sweet Alarts
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="select.html" class="menu-link">
                            Select
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="scrollbar.html" class="menu-link">
                            Scrollbar
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="typography.html" class="menu-link">
                            Typography
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="gallery.html" class="menu-link">
                            Gallery
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="search.html" class="menu-link">
                            Search
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="blank-page.html" class="menu-link">
                            Blank Page
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">chat_error</span>
                    <span class="title">Errors</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="404-error-page.html" class="menu-link">
                            404 Error Page
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="internal-error.html" class="menu-link">
                            Internal Error
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="widgets.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">widgets</span>
                    <span class="title">Widgets</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="google-map.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">map</span>
                    <span class="title">Google Map</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="notification.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">notifications</span>
                    <span class="title">Notification</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="members.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Members</span>
                </a>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">OTHERS</span>
            </li>

            <li class="menu-item">
                <a href="my-profile.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">My Profile</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">Settings</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="account-settings.html" class="menu-link">
                            Account Settings
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="change-password.html" class="menu-link">
                            Change Password
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="connections.html" class="menu-link">
                            Connections
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="connections.html" class="menu-link">
                            Connections
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="privacy-policy.html" class="menu-link">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="terms-conditions.html" class="menu-link">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">keyboard_arrow_down</span>
                    <span class="title">Multi Level Menu</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item after-sub-menu">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <span class="title">Level One</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="carousels.html#" class="menu-link">
                                    Level Three
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="logout.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>