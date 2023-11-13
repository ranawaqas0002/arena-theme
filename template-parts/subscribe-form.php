<style>
    #subscribe-box {
        background-color: #000;
        text-align: center;
        padding: 95px 75px 55px;
        color: #fff;
        margin-top: 60px;
    }
    #subscribe-box .medium-heading {
        margin-top: 0;
        font-size: 40px;
        font-weight: 500;
    }
    #subscribe-box .p {
        max-width: 420px;
        display: inline-block;
    }
    #subscribe-box form {
        margin-top: 20px;
    }
    #subscribe-box form input[type='email'] {
        height: 60px;
        font-size: 16px;
        line-height: 60px;
        padding: 0 20px;
        margin-bottom: 0;
    }

    #subscribe-box form p {
        margin-bottom: 0;
    }

    #subscribe-box form input[type='submit'] {
        height: 60px;
        font-size: 14px !important;
        line-height: 60px;
        padding: 0 20px;
        text-align: center;
        border: 1px solid #fff;
        color: #fff;
        width: 100%;
        filter: invert(0);
        background-image: none;
        text-transform: capitalize !important;
        transition: background-color 600ms, color 600ms;
    }

    #subscribe-box form input[type='submit']:hover {
        background-color: #fff;
        color: #000 !important;
    }

    .arrow-wrap button {
        margin-left: 20px;
    }


    @media only screen and (max-width: 991px) {
        #subscribe-box .medium-heading {
            font-size: 30px;
        }
    }
</style>

<div id="subscribe-box">
    <div class="row">
        <div class="container">
            <h4 class="medium-heading">Subscribe To Newsletter</h4>
            <p class="p">Join our exclusive newsletter for the latest in startups, investments, and consultancy. Gain insights from experts and join thought-provoking discussions. Stay informed, stay ahead.</p>
            <?php echo do_shortcode('[contact-form-7 id="1448" title="Newsletter Subscribe Form"]'); ?>
        </div>
    </div>
</div>