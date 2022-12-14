	<!--begin::Aside-->
	<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
		<!--begin::Brand-->
		<div class="aside-logo flex-column-auto" id="kt_aside_logo">
			<!--begin::Logo-->
			<a href="../../demo5/dist/index.html">
				<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-default.svg" class="h-15px logo" />
			</a>
			<!--end::Logo-->
			<!--begin::Aside toggler-->
			<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
				<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
				<span class="svg-icon svg-icon-1 rotate-180">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
							<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
						</g>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Aside toggler-->
		</div>
		<!--end::Brand-->
		<!--begin::Aside menu-->
		<div class="aside-menu flex-column-fluid">
			<!--begin::Aside Menu-->
			<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
				<!--begin::Menu-->
				<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
					<div class="menu-item">
						<div class="menu-content pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link active" href="../../demo5/dist/index.html">
							<span class="menu-icon">
								<i class="bi bi-house fs-3"></i>
							</span>
							<span class="menu-title">Default</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo5/dist/dashboards/header.html">
							<span class="menu-icon">
								<i class="bi bi-window fs-3"></i>
							</span>
							<span class="menu-title">Header</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo5/dist/landing.html">
							<span class="menu-icon">
								<i class="bi bi-app-indicator fs-3"></i>
							</span>
							<span class="menu-title">Landing</span>
						</a>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-archive fs-3"></i>
							</span>
							<span class="menu-title">Pages</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Profile</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/overview.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/projects.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Projects</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/campaigns.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Campaigns</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/documents.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Documents</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/connections.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Connections</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/profile/activity.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Activity</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Projects</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">My Projects</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/project.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Project</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/targets.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Targets</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/budget.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Budget</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/files.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Files</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/activity.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Activity</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/projects/settings.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Settings</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Wizards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/wizards/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/wizards/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Search</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/search/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/search/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Blog</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/blog/home.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Home</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/blog/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Post</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Company</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/about.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">About Us</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/pricing.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pricing</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/contact.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Contact Us</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/team.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Our Team</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/licenses.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Licenses</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/company/sitemap.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sitemap</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Careers</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/careers/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/careers/apply.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers Apply</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/faq/classic.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Classic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/pages/faq/extended.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Extended</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-person fs-2"></i>
							</span>
							<span class="menu-title">Account</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/security.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Security</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/billing.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Billing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/statements.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statements</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/referrals.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Referrals</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/account/api-keys.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">API Keys</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-sticky fs-3"></i>
							</span>
							<span class="menu-title">Authentication</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Basic Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/basic/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/basic/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/basic/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/basic/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/basic/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Aside Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/aside/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/aside/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/aside/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/aside/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/aside/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Dark Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/dark/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/dark/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/dark/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/dark/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/flows/dark/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/extended/multi-steps-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Multi-steps Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/extended/free-trial-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Free Trial Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/extended/coming-soon.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Coming Soon</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/welcome.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Welcome Message</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/verify-email.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Verify Email</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/password-confirmation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Password Confirmation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/deactivation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Account Deactivation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/error-404.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 404</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/authentication/general/error-500.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 500</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Email Templates</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/email/verify-email.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/email/invitation.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Account Invitation</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/email/password-reset.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/authentication/email/password-change.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Changed</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-shield-check fs-3"></i>
							</span>
							<span class="menu-title">Modals</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">General</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/general/invite-friends.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invite Friends</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/general/view-users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/general/upgrade-plan.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Upgrade Plan</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/general/share-earn.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Share &amp; Earn</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Forms</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/forms/new-target.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Target</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/forms/new-card.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Card</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/forms/new-address.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Address</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/forms/create-api-key.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create API Key</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Wizards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/wizards/two-factor-authentication.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two Factor Auth</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/wizards/create-app.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create App</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/wizards/create-account.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Account</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/wizards/create-project.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Project</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/wizards/offer-a-deal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Offer a Deal</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Search</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/search/users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/modals/search/select-location.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Select Location</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-layers fs-3"></i>
							</span>
							<span class="menu-title">Widgets</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/lists.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lists</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/statistics.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statistics</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/charts.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Charts</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/mixed.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Mixed</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/tables.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tables</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/widgets/feeds.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Feeds</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-printer fs-3"></i>
							</span>
							<span class="menu-title">Customers</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/customers/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/customers/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Listing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/customers/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Details</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-cart fs-3"></i>
							</span>
							<span class="menu-title">Subscriptions</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/subscriptions/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/subscriptions/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription List</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/subscriptions/add.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Subscription</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/subscriptions/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Subscription</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-hr fs-3"></i>
							</span>
							<span class="menu-title">Invoice Manager</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Invoices</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/invoices/view/invoice-1.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 1</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/invoices/view/invoice-2.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 2</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/invoices/create.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create Invoice</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-people fs-3"></i>
							</span>
							<span class="menu-title">User Management</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/user-management/users/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/user-management/users/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View User</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Roles</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/user-management/roles/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Roles List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/user-management/roles/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Role</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/user-management/permissions.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Permissions</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-people fs-3"></i>
							</span>
							<span class="menu-title">Support Center</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/support-center/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tickets</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/support-center/tickets/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tickets List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/support-center/tickets/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Ticket</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tutorials</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/support-center/tutorials/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorials List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo5/dist/apps/support-center/tutorials/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorial Post</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/support-center/faq.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/support-center/licenses.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Licenses</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/support-center/contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Contact Us</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo5/dist/apps/calendar.html">
							<span class="menu-icon">
								<i class="bi bi-calendar3-event fs-3"></i>
							</span>
							<span class="menu-title">Calendar</span>
						</a>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi-chat-left fs-3"></i>
							</span>
							<span class="menu-title">Chat</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/chat/private.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Private Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/chat/group.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Group Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/apps/chat/drawer.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Drawer Chat</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-0">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Layout</span>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-layout-sidebar fs-3"></i>
							</span>
							<span class="menu-title">Aside</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/layouts/aside/light.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Light Skin</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/layouts/aside/font-icons.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Font Icons</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/layouts/aside/minimized.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Minimized</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo5/dist/layouts/aside/none.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Without Aside</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo5/layout-builder.html" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<i class="bi bi-layers fs-3"></i>
							</span>
							<span class="menu-title">Layout Builder</span>
						</a>
					</div>
					<div class="menu-item">
						<div class="menu-content">
							<div class="separator mx-1 my-4"></div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo5/dist/documentation/getting-started/changelog.html">
							<span class="menu-icon">
								<i class="bi bi-card-text fs-3"></i>
							</span>
							<span class="menu-title">Changelog v8.0.21</span>
						</a>
					</div>
				</div>
				<!--end::Menu-->
			</div>
		</div>
		<!--end::Aside menu-->
		<!--begin::Footer-->
		<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
			<a href="../../demo5/dist/documentation/getting-started.html" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
				<span class="btn-label">Docs &amp; Components</span>
				<!--begin::Svg Icon | path: icons/duotone/General/Clipboard.svg-->
				<span class="svg-icon btn-icon svg-icon-2">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
							<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
							<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
							<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
						</g>
					</svg>
				</span>
				<!--end::Svg Icon-->
			</a>
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Aside-->
