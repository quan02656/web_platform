<?php 
	include 'inc/head.php';
	include 'inc/header.php';
?>
<section id="contact-order">
        <div id="page-contact" class="container">
            <div class="breadcrumb">
                <span><a href="">HOME</a>/</span>
                <span>CONTACT US</span>
            </div>
            <h3>CONTACT US</h3>
            <div class="contact-main container">
                <p>Have a question?</p>
                <p>Feel free to drop us a note, we are happy to assist. Don't forget to provide your Order Number or the Email you used to purchase if any.</p>
                <p>By the way, you can take a look at our FAQs&nbsp;<a href="/pages/faq"><u>here</u></a> and find some helpful information.<br></p>
                <ul class="contact-list">
                    <li><strong>Email:</strong> Support@shops-support.com</li>
                    <li><strong>Phone:</strong> 1-408-899-8879</li>
                    <li><strong>Address:</strong> 548 Market St #14148, San Francisco, CA 94104 USA</li>
                </ul>
                <p class="italic"><em><strong>Tell us what you need. Your satisfaction is our top priority!</strong></em><br></p>
            </div>
            <form action="" class="form-contact">
                <div class="form-name-email flex-between">
                    <div class="form-group grow-1">
                        <input type="text" name="name" placeholder="Name" class="input-text2">
                    </div>
                    <div class="form-group grow-1">
                        <input type="text" name="email" placeholder="Email" class="input-text2">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone" class="input-text2">
                </div>
                <div class="form-group contact-select">
                    <select name="" autocomplete="" class="select2">
                        <!---->
                        <option value="I have not received my order">I have not received my order</option>
                        <option value="I want to claim my order">I want to claim my order</option>
                        <option value="I want to cancel my order">I want to cancel my order</option>
                        <option value="I want to update my order">I want to update my order</option>
                        <option value="I have a question about a product/collection">I have a question about a product/collection</option>
                        <option value="I have not received my confirmation email">I have not received my confirmation email</option>
                        <option value="My order has not arrived after 45 days">My order has not arrived after 45 days</option>
                        <option value="Other reasons">Other reasons</option>
                    </select>
                    <i class="base-select__icon"></i>
                </div>
                <div class="form-group">
                    <input type="text" name="order_number" placeholder="Order number" class="input-text2">
                </div>
                <div class="form-group">
                    <textarea rows="10" name="textarea" placeholder="Message" class="textarea2"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="button2" name="submit_contact">SEND</button>
                </div>
            </form>
        </div>
    </section>

<?php 
	include 'inc/footer.php';
	
 ?>
