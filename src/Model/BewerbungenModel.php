<?php
namespace App\Model;

use App\Model\BaseModel;

class BewerbungenModel extends BaseModel
{
    public function fetchAll()
    {
        return $this->query->from('bewerbungen')->fetchAll();
    }

    public function fetch($id)
    {
        return $this->query->from('bewerbungen')->where('id', $id)->fetch();
    }

    public function insert($data)
    {
        return $this->query->insertInto('bewerbungen', $data)->execute();
    }

    public function update($id, $data)
    {
        return $this->query->update('bewerbungen')->set($data)->where('id', $id)->execute();
    }

    public function delete($id)
    {
        return $this->query->deleteFrom('bewerbungen')->where('id', $id)->execute();
    }
}