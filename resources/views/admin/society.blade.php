@include('admin.shared.header')
<div class="uk-margin-auto-vertical uk-margin-auto uk-width-3-4">
    <div class="uk-card uk-card-default uk-background-muted uk-margin-auto">
        <div class="uk-card-header uk-card-title"> Société </div>
        <div class="uk-card-body uk-height-large uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-divider">
                <thead>
                    <tr>
                        <th class="uk-preserve-width">Nom</th>
                        <th class="uk-preserve-width">Siège</th>
                        <th class="uk-preserve-width">Date de création</th>
                        <th class="">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td class="uk-preserve-width">{{ $company->name }}</td>
                        <td class="uk-preserve-width">{{ $company->headoffice }}</td>
                        <td class="uk-preserve-width">{{ $company->created_date }}</td>
                        <td>
                            <div class="uk-inline">
                                <button class="uk-icon-button" uk-icon="more-vertical" type="button"></button>
                                <div uk-dropdown="pos: bottom-justify">
                                    <ul class="uk-nav uk-dropdown-nav uk-text-center">
                                        <li><a href="#" class="uk-icon-link" uk-icon="plus"></a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="/admin/society/delete/{{ $company->id }}"
                                                class="uk-icon-link uk-text-danger" uk-icon="trash"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>