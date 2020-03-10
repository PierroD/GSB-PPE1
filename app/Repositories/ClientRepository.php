<?php

namespace App\Repositories;

use App\Client;


class ClientRepository implements ClientRepositoryInterface
{
    public function get($client_id)
    {
        return Client::find($client_id);
    }
    public function all()
    {
        return Client::all();
    }
    public function delete($client_id)
    {
        Client::destroy($client_id);
    }
    public function update($client_id, array $client_data)
    {
        Client::find($client_id)->update($client_data);
    }
}
