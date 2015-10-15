<?php
namespace sw360\thrift\fossology;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class FossologyHostFingerPrint {
  static $_TSPEC;

  public $id = null;
  public $revision = null;
  public $type = "fossologyHostFingerPrint";
  public $trusted = null;
  public $fingerPrint = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'revision',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'type',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'trusted',
          'type' => TType::BOOL,
          ),
        5 => array(
          'var' => 'fingerPrint',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['revision'])) {
        $this->revision = $vals['revision'];
      }
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['trusted'])) {
        $this->trusted = $vals['trusted'];
      }
      if (isset($vals['fingerPrint'])) {
        $this->fingerPrint = $vals['fingerPrint'];
      }
    }
  }

  public function getName() {
    return 'FossologyHostFingerPrint';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->revision);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->trusted);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fingerPrint);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FossologyHostFingerPrint');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->revision !== null) {
      $xfer += $output->writeFieldBegin('revision', TType::STRING, 2);
      $xfer += $output->writeString($this->revision);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::STRING, 3);
      $xfer += $output->writeString($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->trusted !== null) {
      $xfer += $output->writeFieldBegin('trusted', TType::BOOL, 4);
      $xfer += $output->writeBool($this->trusted);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fingerPrint !== null) {
      $xfer += $output->writeFieldBegin('fingerPrint', TType::STRING, 5);
      $xfer += $output->writeString($this->fingerPrint);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

