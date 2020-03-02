<script src="https://js.stripe.com/v3/"></script>
@include("shared.header")

<div class="uk-align-center uk-width-1-2 uk-card uk-card-default">
    <div class="uk-card-header">
        <h1 class="uk-card-title uk-text-center">Paiement</h1>
    </div>
    <div class="uk-card-body">
        <form>
            <div class="uk-align-center uk-width-1-2">
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
            </div>
            <button class="uk-width-expands uk-button uk-button-primary uk-margin-medium-top uk-border-rounded" id="submit"> Procéder au paiement</button>
        </form>
    </div>
</div>

<script>
    var stripe = Stripe('pk_test_hr5N2V7ylNxKg7nB04n1g0z500RG4vjhUn');
    var elements = stripe.elements();
    var style = {
        base: {
            color: "#32325d"
            , fontFamily: '"Helvetica Neue", Helvetica, sans-serif'
            , fontSmoothing: "antialiased"
            , fontSize: "16px"
            , "::placeholder": {
                color: "#aab7c4"
            }
        }
        , invalid: {
            color: "#fa755a"
            , iconColor: "#fa755a"
        }
    };
    var card = elements.create("card", {
        style: style
    });
    card.mount("#card-element");
    card.addEventListener('change', ({
        error
    }) => {
        const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('uk-alert', 'uk-alert-warning', 'uk-text-center');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('uk-alert', 'uk-alert-warning', 'uk-text-center');
            displayError.textContent = '';
        }
    });
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(ev) {
        ev.preventDefault();
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card
                , billing_details: {
                    name: 'Jenny Rosen'
                }
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    // Show a success message to your customer
                    // There's a risk of the customer closing the window before callback
                    // execution. Set up a webhook or plugin to listen for the
                    // payment_intent.succeeded event that handles any business critical
                    // post-payment actions.
                    console.log(result.paymentIntent);
                }
            }
        });
    });

</script>
