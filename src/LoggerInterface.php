<?php

namespace Lynncho\Aliyunlog\GatherWrite;

interface LoggerInterface
{
    /**
     * Add fields to Log Item
     *
     * @param array $fields
     * @param bool $newLogItem
     */
    public function addLogItemFields(array $fields, $newLogItem = false);

    /**
     * Push logs
     *
     * @return \Aliyun_Log_Models_PutLogsResponse|false
     * @throws \Aliyun_Log_Exception
     */
    public function push();

    /**
     * Get config
     *
     * @return array
     */
    public function getConfig();

    /**
     * Get log client
     *
     * @return \Aliyun_Log_Client
     */
    public function getLogClient();
}