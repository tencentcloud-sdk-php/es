<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取实例名称
 * @method void setInstanceId(string $InstanceId) 设置实例名称
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method string getIndices() 获取索引名称
 * @method void setIndices(string $Indices) 设置索引名称
 */
class CreateClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceId;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var string 索引名称
     */
    public $Indices;

    /**
     * @param string $InstanceId 实例名称
     * @param string $SnapshotName 快照名称
     * @param string $Indices 索引名称
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }
    }
}