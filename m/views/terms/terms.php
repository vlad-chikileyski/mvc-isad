<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Shofy - Mobile Shop Template</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/responsive.css">
    <link rel="shortcut icon" href="/template/images/favicon.png">
</head>

<body>

<div id="main">

    <!-- LEFT SIDEBAR -->
    <div id="slide-out-left" class="side-nav">

        <!-- Form Search -->
        <div class="top-left-nav">
            <div class="searchbar">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <!-- End Form Search -->

        <?php include ROOT . '/views/layout/main-menu.php'; ?>

    </div>
    <!-- END LEFT SIDEBAR -->


    <!-- MAIN PAGE -->
    <div id="page">

        <!-- FIXED Top Navbar -->
        <div class="top-navbar">
            <div class="top-navbar-left">
                <a href="#" id="menu-left" data-activates="slide-out-left">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="top-navbar-right">
                <a href="#" class="dropdown-button"><i class="fa fa-plus"></i>
                </a>
                <a href="#" class="dropdown-button" data-activates="dropdown1">
                    <i class="fa fa-user-circle-o"></i>
                </a>
                <?php if (UserMobile::isGuest()): ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
                        <li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
                        <li class="divider"></li>
                        <li><a href="http://m.adtoday.co.uk/account/logout/"><i class="fa fa-user"></i>Logout</a></li>

                    </ul>
                <?php else: ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="http://m.adtoday.co.uk/login"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="http://m.adtoday.co.uk/register"><i class="fa fa-user"></i> Register</a></li>
                        <li class="divider"></li>
                    </ul>
                <?php endif; ?>

                <!--<a href="#" id="menu-right" data-activates="slide-out-right">
                    <span class="cart-badge">3</span>
                    <i class="fa fa-shopping-basket"></i>
                </a>-->
            </div>
            <div class="site-title">
                <h1>AdToday - Buy & Sell Anything</h1>
            </div>
        </div>
        <!-- End FIXED Top Navbar -->


        <!-- CONTENT CONTAINER -->
        <div class="content-container">

            <div class="content-article">
                <h1  align="center" class="entry-title">Terms of Services</h1>
                <hr>
                <div class="entry-content">
                    <h4>﻿Terms and Conditions of AdToday</h4>
                    <p>The following terms and conditions (collectively, these "Terms and Conditions") apply to your
                        use of adtoday.co.uk, including any content, functionality and services offered on or
                        via adtoday.co.uk (the "Website").</p>
                    <p>Please read the Terms and Conditions carefully before you start using adtoday, because by using
                        the Website you accept and agree to be bound and abide by these Terms and Conditions.</p>
                    <p>These Terms and Conditions are effective as of 01 July, 2017. We expressly reserve the right
                        to change these Terms and Conditions from time to time without notice to you. You acknowledge
                        and agree that it is your responsibility to review this Website and these Terms and Conditions
                        from time to time and to familiarize yourself with any modifications. Your continued use of this
                        Website after such modifications will constitute acknowledgement of the modified Terms and
                        Conditions
                        and agreement to abide and be bound by the modified Terms and Conditions.</p>


                    <h4>Conduct on Website</h4>

                    <p>Your use of the Website is subject to all applicable laws and regulations, and you are solely
                        responsible
                        for the substance of your communications through the Website.</p>
                    <p>By posting information in or otherwise using any communications service, chat room, message
                        board, newsgroup,
                        software library, or other interactive service that may be available to you on or through this
                        Website,
                        you agree that you will not upload, share, post, or otherwise distribute or facilitate
                        distribution
                        of any content — including text, communications, software, images, sounds, data, or other
                        information — that:</p>

                    <ol>
                        <li>Is unlawful, threatening, abusive, harassing, defamatory, libelous, deceptive, fraudulent,
                            invasive of another's privacy,
                            tortious, contains explicit or graphic descriptions or accounts of sexual acts (including
                            but not limited
                            to sexual language of a violent or threatening nature directed at another individual or
                            group of individuals),
                            or otherwise violates our rules or policies
                        </li>
                        <li>Victimizes, harasses, degrades, or intimidates an individual or group of individuals on the
                            basis of religion, gender,
                            sexual orientation, race, ethnicity, age, or disability
                        </li>
                        <li>Infringes on any patent, trademark, trade secret, copyright, right of publicity, or other
                            proprietary right of any party
                        </li>
                        <li>Constitutes unauthorized or unsolicited advertising, junk or bulk email (also known as
                            "spamming"), chain letters, any other
                            form of unauthorized solicitation, or any form of lottery or gambling
                        </li>
                        <li>Contains software viruses or any other computer code, files, or programs that are designed
                            or intended to disrupt, damage, or
                            limit the functioning of any software, hardware, or telecommunications equipment or to
                            damage or obtain unauthorized access to
                            any data or other information of any third party
                        </li>
                        <li>Impersonates any person or entity, including any of our employees or representatives</li>
                    </ol>


                    <p>We neither endorse nor assume any liability for the contents of any material uploaded or
                        submitted by third party users of the Website.
                        We generally do not pre-screen, monitor, or edit the content posted by users of communications
                        services, chat rooms, message boards, newsgroups,
                        software libraries, or other interactive services that may be available on or through this
                        Website.</p>
                    <p>However, we and our agents have the right at their sole discretion to remove from the site
                        without notice any obscene, immoral and or fake images that,
                        in our judgment, does not comply with these Terms of Use and any other rules of user conduct for
                        our Website, or is otherwise harmful, objectionable, or
                        inaccurate. We are not responsible for any failure or delay in removing such content and we will
                        make no refunds, as this will be consequence of a breach
                        of the terms and conditions. You hereby consent to such removal and waive any claim against us
                        arising out of such removal of content. </p>
                    <p>You agree that we may at any time, and at our sole discretion, terminate your membership,
                        account, or other affiliation with our site without prior notice
                        to you for violating any of the above provisions.</p>
                    <p>In addition, you acknowledge that we will cooperate fully with investigations of violations of
                        systems or network security at other sites, including
                        cooperating with law enforcement authorities in investigating suspected criminal violations.</p>


                    <h4>Paid for Advertising</h4>

                    <p>Posting an ad on adtoday.co.uk is generally free but there are certain services you can pay for.
                        If you decide to take advantage of the paid for
                        advertising service you’ll be able to review and accept terms that will be clearly disclosed at
                        the time you post your ad.</p>

                    <h4>Intellectual Property</h4>

                    <p>By accepting these Terms and Conditions, you acknowledge and agree that all content presented to
                        you on this Website is protected by copyrights, trademarks, service marks, patents or other
                        proprietary
                        rights and laws, and is the sole property of adtoday.</p>
                    <p>You are only permitted to use the content as expressly authorized by us or the specific content
                        provider.
                        Except for a single copy made for personal use only, you may not copy, reproduce, modify,
                        republish, upload,
                        post, transmit, or distribute any documents or information from this Website in any form or by
                        any means without
                        prior written permission from us or the specific content provider, and you are solely
                        responsible for obtaining
                        permission before reusing any copyrighted material that is available on this Website.</p>

                    <h4>Password Member Name and Security</h4>

                    <p>Upon registration as a User or Visitor , you will select a Password and User Name that you can
                        use to access your
                        User Account and Profile.You are solely responsible for keeping your login and password secure
                        and secret.
                        You shall not allow any other person or third party including, without limitation, any minor,
                        to use or reuse your account, access and/or use any materials or information from the Web site.
                        You are solely responsible for any losses that may occur on your account.
                        You agree to notify us immediately of any unauthorised use of Your Password or User Name or any
                        other breach
                        of security of which you become aware.</p>

                    <h4>Third Party Websites</h4>

                    <p>This Website may link you to other sites on the Internet or otherwise include references to
                        information,
                        documents, software, materials and/or services provided by other parties. These websites may
                        contain
                        information or material that some people may find inappropriate or offensive.</p>
                    <p>These other websites and parties are not under our control, and you acknowledge that we are not
                        responsible for the accuracy, copyright compliance, legality, decency, or any other aspect of
                        the content of such sites, nor are we responsible for errors or omissions in any references to
                        other parties or their products and services. The inclusion of such a link or reference is
                        provided
                        merely as a convenience and does not imply endorsement of, or association with, the Website or
                        party by
                        us, or any warranty of any kind, either express or implied.</p>

                    <h4>Disclaimer of Warranties, Limitations of Liability and Indemnification</h4>
                    <p>Your use of adtoday is at your sole risk. The Website is provided "as is" and "as available".
                        We disclaim all warranties of any kind, express or implied, including, without limitation, the
                        warranties of merchantability, fitness for a particular purpose and non-infringement.</p>
                    <p>We are not liable for damages, direct or consequential, resulting from your use of the Website,
                        and you agree to defend, indemnify and hold us harmless from any claims, losses, liability costs
                        and expenses (including but not limites to attorney's fees) arising from your violation of any
                        third-party's rights. You acknowledge that you have only a limited, non-exclusive,
                        nontransferable
                        license to use the Website. Because the Website is not error or bug free, you agree that you
                        will
                        use it carefully and avoid using it ways which might result in any loss of your or any third
                        party's
                        property or information.</p>

                    <h4>Term and termination</h4>
                    <p>This Terms and Conditions will become effective in relation to you when you create a adtoday
                        account or when you start using the adtoday and will remain effective until terminated by you or
                        by us.</p>
                    <p>adtoday reserves the right to terminate this Terms and Conditions or suspend your account at
                        any time in case of unauthorized, or suspected unauthorized use of the Website whether in
                        contravention of this Terms and Conditions or otherwise. If adtoday terminates this Terms and
                        Conditions, or suspends your account for any of the reasons set out in this section, adtoday
                        shall have no liability or responsibility to you.</p>
                    <h4>Assignment</h4>
                    <p>adtoday may assign this Terms and Conditions or any part of it without restrictions.
                        You may not assign this Terms and Conditions or any part of it to any third party.</p>

                    <h4>Governing Law</h4>
                    <p>These Terms and Conditions and any dispute or claim arising out of, or related to them,
                        shall be governed by and construed in accordance with the internal laws of the United Kingdom
                        without
                        giving effect to any choice or conflict of law provision or rule.</p>
                    <p>Any legal suit, action or proceeding arising out of, or related to, these Terms of Service
                        or the Website shall be instituted exclusively in the federal courts of United Kingdom.</p>
                </div><!-- .entry-content -->
            </div><!-- .content-article -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->

</body>
</html>