<?php
/**
 * Template Name: Privacy policy-and-terms
 * 
 * @package Roomish
 */

get_header(); ?>

<main id="main" class="site-main">
	<div class="container">
		<div class="breadcrumbs">
			<a href="/" class="text-muted"><i>&#8249;</i><?php echo esc_html__( 'Back to Home', 'roomish' ); ?></a><span>/</span><?php echo esc_html__( 'Privacy policy', 'roomish' ); ?>
		</div>
		<div class="policy-and-terms-page">
			<header class="policy-and-terms-header">
				<h1 class="heading-primary"><?php echo esc_html__( 'Privacy policy', 'roomish' ); ?></h1>
				<br>
				<p class="text-lead"><?php echo esc_html__( 'Effective Date:', 'roomish' ); ?>  3 September 2025</p>
			</header>

			<div class="policy-and-terms-content">
				<section class="policy-and-terms-section">
					<p><strong><?php echo esc_html__( 'Roomish ("we," "our," or "us") values your privacy. This Privacy policy-and-terms explains what data we collect, how we use it, and the rights you have when using the Roomish mobile application ("App") and related services ("Services").', 'roomish' ); ?></p>
					<h2><?php echo esc_html__( '1. Information We Collect', 'roomish' ); ?></h3>
					<table style="width: 100%; border-collapse: collapse; font-family: docs-Manrope, Arial;">
						<thead>
							<tr style="background-color: #f5f5f5;">
								<th style="border: 1px solid #ddd; padding: 12px; text-align: left; font-weight: bold;">Category</th>
								<th style="border: 1px solid #ddd; padding: 12px; text-align: left; font-weight: bold;">Examples</th>
								<th style="border: 1px solid #ddd; padding: 12px; text-align: left; font-weight: bold;">Collected When</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Profile & Account Data</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Email address, authentication tokens</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When you create or sign in to an account</td>
							</tr>
							<tr style="background-color: #f9f9f9;">
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Hydration & Lifestyle Data</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Daily water intake, drink types, hydration goals, reminders</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When you log drinks or configure your hydration plan</td>
							</tr>
							<tr>
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Device & Usage Data</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Device model, OS version, app version, crash logs, interaction events</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When the App runs or you interact with it</td>
							</tr>
							<tr style="background-color: #f9f9f9;">
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Health Data (Optional)</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Weight, age, activity level, climate data, Apple Health integrations</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When you connect health integrations or enter personal details</td>
							</tr>
							<tr>
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Payment Data</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Transaction IDs, subscription status (handled by App Store)</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When you purchase premium features</td>
							</tr>
							<tr style="background-color: #f9f9f9;">
								<td style="border: 1px solid #ddd; padding: 10px; font-weight: 500;">Support Communications</td>
								<td style="border: 1px solid #ddd; padding: 10px;">Emails, in-app messages, metadata needed to resolve your issue</td>
								<td style="border: 1px solid #ddd; padding: 10px;">When you contact support</td>
							</tr>
						</tbody>
					</table>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '2. How We Use Your Information', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'We use your data to:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'Deliver core functionality (hydration tracking, reminders, AI-based adjustments).', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Sync with Apple Health if you choose to connect it.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Improve Services and fix bugs.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Provide customer support.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Send essential notifications (hydration reminders, subscription updates).', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Conduct aggregated, anonymized analytics to enhance the App.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Marketing only with your explicit consent (you may opt out anytime).', 'roomish' ); ?></li>
					</ul>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '3. Legal Bases (GDPR)', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'We process your data under:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'Performance of contract – to provide Services you request.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Legitimate interests – to improve usability and App quality.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Consent – for health integrations, marketing, or AI personalization.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Legal obligation – to comply with tax, accounting, and consumer laws.', 'roomish' ); ?></li>
					</ul>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '4. Sharing & Disclosure', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'We do not sell personal data. We share information only:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'With trusted service providers (cloud hosting, analytics, payment systems).', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'When required by law or legal process.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'In case of merger/acquisition (you will be notified).', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'In aggregated and de-identified form for research/product improvement.', 'roomish' ); ?></li>
					</ul>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '5. Data Retention', 'roomish' ); ?></h2>
					<ul>
						<li><?php echo esc_html__( 'Hydration logs: kept as long as your account exists, or until you delete them.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Health integrations: stored only while connected and may be disconnected at any time.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Payment/subscription records: retained as required by law (typically 7 years).', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Support communications: retained as long as necessary to resolve your request.', 'roomish' ); ?></li>
					</ul>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '6. Your Rights', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'Depending on your location, you may request to:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'Access and receive a copy of your data.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Correct or update inaccurate information.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Delete your account and associated data.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Restrict or object to certain processing.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Export (port) your data to another service.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Withdraw consent for optional processing at any time.', 'roomish' ); ?></li>
					</ul>
					<p><?php echo esc_html__( 'To exercise your rights, email us at', 'roomish' ); ?> <a href="mailto:admin@roomish.com">admin@roomish.com</a></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '7. Children\'s Privacy', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'Roomish is not directed to children under 13 (or the minimum age in your country). We do not knowingly collect data from children. If discovered, such data will be deleted.', 'roomish' ); ?></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '8. Security', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'We use industry-standard safeguards:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'TLS encryption in transit.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'AES-256 encryption for sensitive data at rest.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Role-based access controls.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Regular audits and monitoring.', 'roomish' ); ?></li>
					</ul>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '9. International Transfers', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'Your data may be stored on servers outside your country. For transfers, we rely on Standard Contractual Clauses (SCCs) and other recognized legal safeguards.', 'roomish' ); ?></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '10. California Privacy Notice (CCPA/CPRA)', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'Residents of California have the right to:', 'roomish' ); ?></p>
					<ul>
						<li><?php echo esc_html__( 'Know what personal information is collected.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Request deletion of their personal data.', 'roomish' ); ?></li>
						<li><?php echo esc_html__( 'Opt out of "sharing" as defined by CPRA.', 'roomish' ); ?></li>
					</ul>
					<p><?php echo esc_html__( 'Roomish does not sell personal data.', 'roomish' ); ?></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '11. Third-Party Links & Integrations', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'Our App may link to external services (e.g., Apple Health, RevenueCat, analytics providers). Their practices are governed by their own privacy policies.', 'roomish' ); ?></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '12. Changes to This policy-and-terms', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'We may update this Privacy policy-and-terms. If changes are material, we will notify you at least 30 days before they take effect via App or email. Continued use of the Services after the effective date means acceptance.', 'roomish' ); ?></p>
				</section>

				<section class="policy-and-terms-section">
					<h2><?php echo esc_html__( '13. Contact Us', 'roomish' ); ?></h2>
					<p><?php echo esc_html__( 'If you have questions or concerns about this Privacy policy-and-terms, please contact us:', 'roomish' ); ?></p>
					<p>
						<strong><?php echo esc_html__( 'Roomish', 'roomish' ); ?></strong><br>
						<strong><?php echo esc_html__( 'Email:', 'roomish' ); ?></strong> <a href="mailto:admin@roomish.com">admin@roomish.com</a>
					</p>
				</section>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
