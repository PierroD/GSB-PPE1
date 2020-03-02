<!DOCTYPE html>
<html lang="en">
@include("shared.header")

<!--nom de la page -->
<title>Liste</title>

<body>
    <!-- titre  -->
    <h3 class="uk-text-center"><i class="far fa-file-alt uk-text-danger"></i> Les kits et laboratoires <i
            class="far fa-file-alt uk-text-danger"></i>
    </h3>
    <!-- fin du titre -->
    <!-- tableau qui affiche les données -->
    <div class="uk-card-default  uk-card-body uk-container">
        <div class="uk-grid-small uk-child-width-1-2" uk-grid>
            <div class="uk-margin-auto-vertical">
                <div class="uk-text-left uk-margin-auto">
                    <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize"
                        type="button">@lang('listTable.selectType')<i
                            class="fas fa-sort-down uk-margin-small-left"></i></a>
                    <div uk-dropdown="pos: right-center; mode: click">
                        <ul class="uk-nav uk-dropdown-nav uk-text-center">
                            <li><a href="/list/kits/">@lang('listTable.kits')</a></li>
                            <li><a href="/list/societies">@lang('listTable.laboratories')</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="/list/">@lang('listTable.kitsAndLaboratories')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-margin-auto-vertical">
                <div class="uk-text-right uk-margin-auto">
                    <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize"
                        type="button">@lang('listTable.sortBy')<i class="fas fa-sort-down uk-margin-small-left"
                            disabled></i></a>
                </div>
            </div>
        </div>
    </div>
    @foreach($all as $company)
    @if(!empty(count($company->products)))
    <div class="uk-container uk-margin-small-right uk-margin-medium-top">
        <a class="uk-text-italic uk-text-success uk-text-capitalize" href="/society/{{ $company->id }}">
            <span>@</span>{{ $company->name }}
        </a>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider uk-container-small uk-margin-auto">
        <thead>
            <tr class="text-center">
                <th>@lang('list.kitName')</th>
                <th>@lang('list.kitNote')</th>
                <th class="uk-text-right">@lang('list.kitPrice')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($company->products as $product)
            <tr>
                <td><a href="/society/kit/{{ $product->id }}"
                        class="uk-text-emphasis uk-button uk-button-text">{{ $product->title }}</a></td>
                <td>{{ str_replace(".",",",$product->grade) }} <i class="fas fa-star uk-text-primary"></i></td>
                <td class="uk-text-right">{{ $product->price }} € </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @endforeach

    <!-- fin du tableau -->
</body>

</html>