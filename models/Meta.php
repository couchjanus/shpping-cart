<?php


class Meta {

    public static function index() {

        $con = Connection::make();
        $sql = "SELECT * FROM metas
                ORDER BY id ASC";

        $res = $con->query($sql);

        $metas = $res->fetchAll(PDO::FETCH_ASSOC);
        return $metas;

    }

    public static function store ($options) {

        $con = Connection::make();
        $sql = "INSERT INTO metas(
                resource_id, resource, title, links, keywords,
                description)
                VALUES (:resource_id, :resource, :title, :links,
                :keywords, :description)";

        $res = $con->prepare($sql);
        
        $res->bindParam(':resource_id', $options['resource_id'], PDO::PARAM_INT);

        $res->bindParam(':resource', $options['resource'], PDO::PARAM_STR);
        $res->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $res->bindParam(':keywords', $options['keywords'], PDO::PARAM_STR);
        $res->bindParam(':links', $options['links'], PDO::PARAM_STR);
        $res->bindParam(':description', $options['description'], PDO::PARAM_STR);

        if ($res->execute()) {
            return $con->lastInsertId();
        } else {
            return 0;
        }
    }

    public static function getMetas($resource, $resourceId)
    {
        $con = Connection::make();
        $res = $con->prepare("SELECT * FROM metas WHERE (resource_id = :resource_id AND resource = :resource)");

        $res->bindParam(':resource_id', $resourceId, PDO::PARAM_INT);

        $res->bindParam(':resource', $resource, PDO::PARAM_STR);
        
        $res->execute();

        $metas = $res->fetch(PDO::FETCH_ASSOC);
        return $metas;
    }

    public static function destroy($resource, $resourceId) 
    {
        $con = Connection::make();
        $sql = "DELETE FROM metas WHERE (resource_id = :resource_id AND resource = :resource)";
        $res = $con->prepare($sql);
        $res->bindParam(':resource_id', $resourceId, PDO::PARAM_INT);
        $res->bindParam(':resource', $resource, PDO::PARAM_STR);
        return $res->execute();
    }

}