<!DOCTYPE html>
<html lang="en">
@include("shared.header")

<!--nom de la page -->
<title>@lang('cart.title')</title>

<body>
    @if(isset($notConnected))
    <div class="uk-text-center uk-margin-auto">
        <div class="uk-alert-danger uk-margin-auto" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p class="uk-text-center">@lang('cart.warning')</p>
        </div>
        <a class="uk-button uk-button-primary uk-border-rounded" href="/login">@lang('cart.connect')</a>
    </div>
    @else
    <div class="uk-container-small uk-margin-auto uk-margin-medium-top uk-card uk-card-default uk-card-small uk-border-rounded uk-child-width-1-1@s uk-child-width-1-2@m"
        uk-grid>
        <div>
            <div class="uk-card-header uk-grid-collapse uk-child-width-1-4 uk-margin" uk-grid>
                <div>
                    <p class="uk-text-center"> @lang('cart.product') </p>
                </div>

                <div>
                    <p class="uk-text-center"> @lang('cart.price') </p>
                </div>
                <div>
                    <p class="uk-text-center"> @lang('cart.quantity') </p>
                </div>
                <div class="uk-text-center">
                    <a class=" uk-text-warning" href="/shoppingcart/empty"> @lang('cart.delete') </a>
                </div>
            </div>
            @if(isset($empty))
            <div class="uk-container uk-margin-medium-bottom">
                <div
                    class="uk-text-center uk-background-muted uk-padding uk-border-rounded uk-width-medium uk-margin-auto uk-margin-medium-bottom">
                    <h4 class="uk-text-italic uk-text-muted">@lang('cart.noProduct')</h4>
                    <i class="fas fa-box-open fa-3x"></i>
                </div>
            </div>
            @else
            @foreach($ItemsCollection as $Item)
            <div class="uk-card-body uk-text-center">
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-4 uk-margin uk-border-rounded"
                    uk-grid>
                    <div class="uk-card-body">
                        <div>
                            <a class="uk-text-small uk-text-emphasis" href="/society/kit/{{ $Item->id }}">
                                {{ $Item->name }} </a>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ getPrice($Item->price) }}</p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <p> {{ $Item->quantity }} </p>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <a class="uk-text-warning" href="/shoppingcart/delete/{{ $Item->id }}" uk-icon="trash"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <div class="uk-card-header">
                <p class="uk-text-center"> @lang('cart.summerse') </p>
            </div>
            <div class="uk-card-body uk-text-center">
                @foreach($ItemsCollection as $Item)
                <p class="uk-small-text">{{ $Item->name}} : {{ getPrice($Item->price) }} x
                    {{ $Item->quantity }}
                    = {{ getPrice($Item->price * $Item->quantity) }}</p>
                @endforeach
                <p class="uk-text-bold uk-text-bottom">Sous-total :
                    {{ getPrice($CartSubTotalPrice) }}
                </p>
                @foreach($CartConditions as $Condition)
                <hr>
                <p class="uk-text-bottom"> {{ $Condition->getName() }} :
                    {{ getPrice($CartTotalPrice - $CartSubTotalPrice) }}
                </p>
                @endforeach
                <hr>
                <p class="uk-text-bold uk-text-bottom">@lang('cart.total') :
                    {{ getPrice($CartTotalPrice) }}
                </p>

                <a class="uk-button uk-button-primary uk-border-rounded" href="/payment">@lang('cart.pay')</a>
            </div>
        </div>
        @endif
        @endif

    </div>
</body>

</html>