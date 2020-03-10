@include('admin.shared.header')
<div class="uk-margin-auto-vertical uk-margin-auto uk-width-3-4">
    <div class="uk-card uk-card-default uk-background-muted uk-margin-auto">
        <div class="uk-card-header uk-card-title"> Utilisateurs </div>
        <div class="uk-card-body uk-height-large uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-divider">
                <thead>
                    <tr>
                        <th class="uk-preserve-width">Nom</th>
                        <th class="uk-preserve-width">Prenom</th>
                        <th class="uk-preserve-width">Société</th>
                        <th class="uk-table-expand">Email</th>
                        <th class="uk-text-center uk-width-small">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="uk-preserve-width">{{ $user->last_name }}</td>
                        <td class="uk-preserve-width">{{ $user->first_name }}</td>
                        <td class="uk-preserve-width">{{ $user->company->name }}</td>
                        <td class="uk-text-expand">{{ $user->mail }}</td>
                        <td class="uk-text-center">
                            <div class="uk-inline">
                                @switch($user->role->name)
                                @case("user")
                                <a class="uk-button uk-button-default uk-button-small uk-border-rounded uk-text-primary"
                                    href="/admin/updateuserrole/0"> Utilisateur<i
                                        class="fas fa-angle-down uk-margin-small-left"></i></a>
                                @break
                                @case("admin")
                                <a class="uk-button uk-button-default uk-button-small uk-border-rounded uk-text-danger"
                                    href="/admin/updateuserrole/1"> Administrateur<i
                                        class="fas fa-angle-down uk-margin-small-left"></i></a>
                                @break
                                @endswitch
                                <div uk-dropdown="pos: bottom-center">
                                    <ul class="uk-nav uk-dropdown-nav uk-text-center">
                                        <li><a href="/disconnect" class="uk-text-primary">
                                                Utilisateur</a>
                                        </li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="/disconnect" class="uk-text-danger">
                                                Administrateur</a>
                                        </li>
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