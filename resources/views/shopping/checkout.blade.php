<script src="https://js.stripe.com/v3/"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include("shared.header")

<div class="uk-align-center uk-width-1-2 uk-card uk-card-default">
    <div class="uk-card-header">
        <h1 class="uk-card-title uk-text-center">Paiement</h1>
    </div>
    <div class="uk-card-body">
        <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
            @csrf
            <div class="uk-align-center uk-width-1-2">
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
            </div>
            <button class="uk-width-expands uk-button uk-button-primary uk-margin-medium-top uk-border-rounded"
                id="submit">
                Procéder au paiement</button>
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
    card.addEventListener('change', ({error}) => {
        const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('uk-alert', 'uk-alert-warning', 'uk-text-center');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('uk-alert', 'uk-alert-warning', 'uk-text-center');
            displayError.textContent = '';
        }
    });
    var submitButton = document.getElementById('submit');

    submitButton.addEventListener('click', function(ev) {
        ev.preventDefault();
        submitButton.disabled = true;
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                submitButton.disabled = false;
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    console.log('passed');
                    var paymentIntent = result.paymentIntent;
                    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var form = document.getElementById("payment-form");
                    var url = form.action;
                    var redirect = '/thankyou';
                  fetch(
                      url,
                      {
                        headers: {
                              "Content-Type": "application/json",
                              "Accept": "application/json, text-plain, */*",
                              "X-Requested-With": "XMLHttpRequest",
                              "X-CSRF-TOKEN": token
                            },
                        method: 'post',
                        body: JSON.stringify({
                                 paymentIntent: paymentIntent,
                                })
                        }
                    ).then((data) => {
                        console.log(data)
                        window.location.href = redirect;
                    }).catch((error) =>{
                        console.log(error)
                    })
                }
            }
        });
    });

</script>