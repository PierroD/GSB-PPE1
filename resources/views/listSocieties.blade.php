
<!DOCTYPE html>
<html lang="en">
@include("header")

<!--nom de la page -->
<title>Liste</title>

<body>
    <!-- titre  -->
    <h3 class="uk-text-center"><i class="far fa-file-alt uk-text-danger"></i> Les Laboratoires <i
            class="far fa-file-alt uk-text-danger"></i>
    </h3>
    <!-- fin du titre -->
    <!-- tableau qui affiche les données -->
    <div class="uk-card-default  uk-card-body uk-container">
        <div class="uk-grid-small uk-child-width-1-2" uk-grid>
            <div class="uk-margin-auto-vertical">
                <div class="uk-text-left uk-margin-auto">
                    <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize" type="button">Type
                        sélectionné <i class="fas fa-sort-down uk-margin-small-left"></i></a>
                    <div uk-dropdown="pos: right-center; mode: click">
                        <ul class="uk-nav uk-dropdown-nav uk-text-center">
                            <li><a href="/list/kits/">Les Kits</a></li>
                            <li><a href="/list/societies">Les Laboratoires</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="/list/">Kits & Laboratoires</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-margin-auto-vertical">
                <div class="uk-text-right uk-margin-auto">
                    <a class="uk-button uk-button-text uk-border-rounded uk-text-capitalize" type="button">Trier par<i
                            class="fas fa-sort-down uk-margin-small-left"></i></a>
                    <div uk-dropdown="pos: right-center; mode: click">
                        <ul class="uk-nav uk-dropdown-nav uk-text-center">
                            <li><a href="/list/societies/orderBy/nameDesc">Nom Décroissant</a></li>
                            <li><a href="/list/societies/orderBy/nameAsc">Nom Croissant</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider uk-container-small uk-margin-auto">
        <thead>
            <tr class="text-center">
                <th>id</th>
                <th class="uk-text-center">Nom du laboratoire</th>
            </tr>
        </thead>
        <tbody>
            @foreach($societies as $society)
            <tr>
                <td>{{ $society->id }}</td>
                <td class="uk-text-center"><a class="uk-text-italic  uk-text-capitalize uk-button-text"
                        href="/society/{{ $society->id }}">{{ $society->company }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- fin du tableau -->
</body>

</html>