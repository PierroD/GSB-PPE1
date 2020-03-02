<!DOCTYPE html>
<html lang="en">
@include("shared.header")

<!--nom de la page -->
<title>@lang('listSocieties.title')</title>

<body>
    <!-- titre  -->
    <h3 class="uk-text-center"><i class="far fa-file-alt uk-text-danger"></i> {{ $title }} <i
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
                        type="button">@lang('listTable.sortBy')<i class="fas fa-sort-down uk-margin-small-left"></i></a>
                    <div uk-dropdown="pos: right-center; mode: click">
                        <ul class="uk-nav uk-dropdown-nav uk-text-center">
                            <li><a href="/list/societies/orderBy/nameDesc">@lang('listTable.nameDesc')</a></li>
                            <li><a href="/list/societies/orderBy/nameAsc">@lang('listTable.nameAsc')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider uk-container-small uk-margin-auto">
        <thead>
            <tr class="text-center">
                <th>@lang('listSocieties.laboratoryName')</th>
                <th class="uk-text-center">@lang('listSocieties.laboratoryName')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($societies as $society)
            <tr>
                <td>{{ $society->id }}</td>
                <td class="uk-text-center"><a class="uk-text-italic  uk-text-capitalize uk-button-text"
                        href="/society/{{ $society->id }}">{{ $society->name }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- fin du tableau -->
</body>

</html>