<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgateservice.proto
//   Date: 2015-10-06 23:48:10

namespace vtgateservice {

  class VitessClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param vtgate\ExecuteRequest $input
     */
    public function Execute(\vtgate\ExecuteRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/Execute', $argument, '\vtgate\ExecuteResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteShardsRequest $input
     */
    public function ExecuteShards(\vtgate\ExecuteShardsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteShards', $argument, '\vtgate\ExecuteShardsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteKeyspaceIdsRequest $input
     */
    public function ExecuteKeyspaceIds(\vtgate\ExecuteKeyspaceIdsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteKeyspaceIds', $argument, '\vtgate\ExecuteKeyspaceIdsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteKeyRangesRequest $input
     */
    public function ExecuteKeyRanges(\vtgate\ExecuteKeyRangesRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteKeyRanges', $argument, '\vtgate\ExecuteKeyRangesResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteEntityIdsRequest $input
     */
    public function ExecuteEntityIds(\vtgate\ExecuteEntityIdsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteEntityIds', $argument, '\vtgate\ExecuteEntityIdsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteBatchShardsRequest $input
     */
    public function ExecuteBatchShards(\vtgate\ExecuteBatchShardsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteBatchShards', $argument, '\vtgate\ExecuteBatchShardsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\ExecuteBatchKeyspaceIdsRequest $input
     */
    public function ExecuteBatchKeyspaceIds(\vtgate\ExecuteBatchKeyspaceIdsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/ExecuteBatchKeyspaceIds', $argument, '\vtgate\ExecuteBatchKeyspaceIdsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\StreamExecuteRequest $input
     */
    public function StreamExecute($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/vtgateservice.Vitess/StreamExecute', $argument, '\vtgate\StreamExecuteResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\StreamExecuteShardsRequest $input
     */
    public function StreamExecuteShards($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/vtgateservice.Vitess/StreamExecuteShards', $argument, '\vtgate\StreamExecuteShardsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\StreamExecuteKeyspaceIdsRequest $input
     */
    public function StreamExecuteKeyspaceIds($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/vtgateservice.Vitess/StreamExecuteKeyspaceIds', $argument, '\vtgate\StreamExecuteKeyspaceIdsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\StreamExecuteKeyRangesRequest $input
     */
    public function StreamExecuteKeyRanges($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/vtgateservice.Vitess/StreamExecuteKeyRanges', $argument, '\vtgate\StreamExecuteKeyRangesResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\BeginRequest $input
     */
    public function Begin(\vtgate\BeginRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/Begin', $argument, '\vtgate\BeginResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\CommitRequest $input
     */
    public function Commit(\vtgate\CommitRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/Commit', $argument, '\vtgate\CommitResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\RollbackRequest $input
     */
    public function Rollback(\vtgate\RollbackRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/Rollback', $argument, '\vtgate\RollbackResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\SplitQueryRequest $input
     */
    public function SplitQuery(\vtgate\SplitQueryRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/SplitQuery', $argument, '\vtgate\SplitQueryResponse::deserialize', $metadata, $options);
    }
    /**
     * @param vtgate\GetSrvKeyspaceRequest $input
     */
    public function GetSrvKeyspace(\vtgate\GetSrvKeyspaceRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/vtgateservice.Vitess/GetSrvKeyspace', $argument, '\vtgate\GetSrvKeyspaceResponse::deserialize', $metadata, $options);
    }
  }
}
