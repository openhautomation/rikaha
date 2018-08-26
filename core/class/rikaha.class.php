<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once __DIR__  . '/../../../../core/php/core.inc.php';

class rikaha extends eqLogic {
    /*     * *************************Attributs****************************** */

    /*     * ***********************Methode static*************************** */
    /*
    public static function cron() {
      // debug leve == 100
      if (log::getLogLevel('rikaha') != 100) {
           self::cron30();
      }
    }
    */
    /*
    public static function cron5() {
    }

    public static function cron15() {
    }
    */
    public static function cron30() {
      foreach (eqLogic::byType('rikaha') as $rikaha) {
        $rikaha->getInfo();
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
      }
    }
    /*
    public static function cronHourly() {
    }

    public static function cronDaily() {
    }
    */

    /*     * *********************Méthodes d'instance************************* */
    public static $_widgetPossibility = array('custom' => array(
        'visibility' => true,
        'displayName' => true,
        'displayObjectName' => true,
        'optionalParameters' => false,
        'background-color' => true,
        'text-color' => true,
        'border' => true,
        'border-radius' => true,
        'background-opacity' => true,
  	));

    private function getStoveStructure(){
      $stoveStructure=array(
        //name
        'name'=>array(
          'name'=>__('Nom', __FILE__),
          'id'=>'name',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'name')
          ),
          'unite'=>''
        ),
        //stoveID
        'stoveID'=>array(
          'name'=>__('ID du poêle', __FILE__),
          'id'=>'stoveID',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'stoveID')
          ),
          'unite'=>''
        ),
        //lastSeenMinutes
        'lastSeenMinutes'=>array(
          'name'=>__('lastSeenMinutes', __FILE__),
          'id'=>'lastSeenMinutes',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'lastSeenMinutes')
          ),
          'unite'=>''
        ),
        //lastConfirmedRevision
        'lastConfirmedRevision'=>array(
          'name'=>__('lastConfirmedRevision', __FILE__),
          'id'=>'lastConfirmedRevision',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'lastConfirmedRevision')
          ),
          'unite'=>''
        ),
        //controls
        //revision
        'revision'=>array(
          'name'=>__('Révision', __FILE__),
          'id'=>'revision',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'revision')
          ),
          'unite'=>''
        ),
        //onOff
        'onOff'=>array(
          'name'=>__('On/Off', __FILE__),
          'id'=>'onOff',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'onOff')
          ),
          'unite'=>''
        ),
        //operatingMode
        'operatingMode'=>array(
          'name'=>__('Mode', __FILE__),
          'id'=>'operatingMode',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'operatingMode')
          ),
          'unite'=>''
        ),
        //heatingPower
        'heatingPower'=>array(
          'name'=>__('Puissance', __FILE__),
          'id'=>'heatingPower',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingPower')
          ),
          'unite'=>'%'
        ),
        //targetTemperature
        'targetTemperature'=>array(
          'name'=>__('Temp. de consigne', __FILE__),
          'id'=>'targetTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'targetTemperature')
          ),
          'unite'=>'°C'
        ),
        //ecoMode
        'ecoMode'=>array(
          'name'=>__('Mode éco', __FILE__),
          'id'=>'ecoMode',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'ecoMode')
          ),
          'unite'=>''
        ),
        //heatingTimeMon1
        'heatingTimeMon1'=>array(
          'name'=>__('heatingTimeMon1', __FILE__),
          'id'=>'heatingTimeMon1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeMon1')
          ),
          'unite'=>''
        ),
        //heatingTimeMon2
        'heatingTimeMon2'=>array(
          'name'=>__('heatingTimeMon2', __FILE__),
          'id'=>'heatingTimeMon2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeMon2')
          ),
          'unite'=>''
        ),
        //heatingTimeTue1
        'heatingTimeTue1'=>array(
          'name'=>__('heatingTimeTue1', __FILE__),
          'id'=>'heatingTimeTue1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeTue1')
          ),
          'unite'=>''
        ),
        //heatingTimeTue2
        'heatingTimeTue2'=>array(
          'name'=>__('heatingTimeTue2', __FILE__),
          'id'=>'heatingTimeTue2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeTue2')
          ),
          'unite'=>''
        ),
        //heatingTimeWed1
        'heatingTimeWed1'=>array(
          'name'=>__('heatingTimeWed1', __FILE__),
          'id'=>'heatingTimeWed1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeWed1')
          ),
          'unite'=>''
        ),
        //heatingTimeWed2
        'heatingTimeWed2'=>array(
          'name'=>__('heatingTimeWed2', __FILE__),
          'id'=>'heatingTimeWed2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeWed2')
          ),
          'unite'=>''
        ),
        //heatingTimeThu1
        'heatingTimeThu1'=>array(
          'name'=>__('heatingTimeThu1', __FILE__),
          'id'=>'heatingTimeThu1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeThu1')
          ),
          'unite'=>''
        ),
        //heatingTimeThu2
        'heatingTimeThu2'=>array(
          'name'=>__('heatingTimeThu2', __FILE__),
          'id'=>'heatingTimeThu2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeThu2')
          ),
          'unite'=>''
        ),
        //heatingTimeFri1
        'heatingTimeFri1'=>array(
          'name'=>__('heatingTimeFri1', __FILE__),
          'id'=>'heatingTimeFri1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeFri1')
          ),
          'unite'=>''
        ),
        //heatingTimeFri2
        'heatingTimeFri2'=>array(
          'name'=>__('heatingTimeFri2', __FILE__),
          'id'=>'heatingTimeFri2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeFri2')
          ),
          'unite'=>''
        ),
        //heatingTimeSat1
        'heatingTimeSat1'=>array(
          'name'=>__('heatingTimeSat1', __FILE__),
          'id'=>'heatingTimeSat1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeSat1')
          ),
          'unite'=>''
        ),
        //heatingTimeSat2
        'heatingTimeSat2'=>array(
          'name'=>__('heatingTimeSat2', __FILE__),
          'id'=>'heatingTimeSat2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeSat2')
          ),
          'unite'=>''
        ),
        //heatingTimeSun1
        'heatingTimeSun1'=>array(
          'name'=>__('heatingTimeSun1', __FILE__),
          'id'=>'heatingTimeSun1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeSun1')
          ),
          'unite'=>''
        ),
        //heatingTimeSun2
        'heatingTimeSun2'=>array(
          'name'=>__('heatingTimeSun2', __FILE__),
          'id'=>'heatingTimeSun2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimeSun2')
          ),
          'unite'=>''
        ),
        //heatingTimesActiveForComfort
        'heatingTimesActiveForComfort'=>array(
          'name'=>__('heatingTimesActiveForComfort', __FILE__),
          'id'=>'heatingTimesActiveForComfort',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'heatingTimesActiveForComfort')
          ),
          'unite'=>''
        ),
        //setBackTemperature
        'setBackTemperature'=>array(
          'name'=>__('setBackTemperature', __FILE__),
          'id'=>'setBackTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'setBackTemperature')
          ),
          'unite'=>'°C'
        ),
        //convectionFan1Active
        'convectionFan1Active'=>array(
          'name'=>__('convectionFan1Active', __FILE__),
          'id'=>'convectionFan1Active',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan1Active')
          ),
          'unite'=>''
        ),
        //convectionFan1Level
        'convectionFan1Level'=>array(
          'name'=>__('convectionFan1Level', __FILE__),
          'id'=>'convectionFan1Level',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan1Level')
          ),
          'unite'=>''
        ),
        //convectionFan1Area
        'convectionFan1Area'=>array(
          'name'=>__('convectionFan1Area', __FILE__),
          'id'=>'convectionFan1Area',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan1Area')
          ),
          'unite'=>''
        ),
        //convectionFan2Active
        'convectionFan2Active'=>array(
          'name'=>__('convectionFan2Active', __FILE__),
          'id'=>'convectionFan2Active',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan2Active')
          ),
          'unite'=>''
        ),
        //convectionFan2Level
        'convectionFan2Level'=>array(
          'name'=>__('convectionFan2Level', __FILE__),
          'id'=>'convectionFan2Level',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan2Level')
          ),
          'unite'=>''
        ),
        //convectionFan2Area
        'convectionFan2Area'=>array(
          'name'=>__('convectionFan2Area', __FILE__),
          'id'=>'convectionFan2Area',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'convectionFan2Area')
          ),
          'unite'=>''
        ),
        //frostProtectionActive
        'frostProtectionActive'=>array(
          'name'=>__('Mode hors gel', __FILE__),
          'id'=>'frostProtectionActive',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'frostProtectionActive')
          ),
          'unite'=>''
        ),
        //frostProtectionTemperature
        'frostProtectionTemperature'=>array(
          'name'=>__('Temp. hors gel', __FILE__),
          'id'=>'frostProtectionTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'frostProtectionTemperature')
          ),
          'unite'=>'°C'
        ),
        //temperatureOffset
        'temperatureOffset'=>array(
          'name'=>__('temperatureOffset', __FILE__),
          'id'=>'temperatureOffset',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'temperatureOffset')
          ),
          'unite'=>'°C'
        ),
        //RoomPowerRequest
        'RoomPowerRequest'=>array(
          'name'=>__('RoomPowerRequest', __FILE__),
          'id'=>'RoomPowerRequest',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'RoomPowerRequest')
          ),
          'unite'=>''
        ),
        //calenderWeekday
        'calenderWeekday'=>array(
          'name'=>__('calenderWeekday', __FILE__),
          'id'=>'calenderWeekday',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderWeekday')
          ),
          'unite'=>''
        ),
        //calenderDay
        'calenderDay'=>array(
          'name'=>__('calenderDay', __FILE__),
          'id'=>'calenderDay',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderDay')
          ),
          'unite'=>''
        ),
        //calenderMonth
        'calenderMonth'=>array(
          'name'=>__('calenderMonth', __FILE__),
          'id'=>'calenderMonth',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderMonth')
          ),
          'unite'=>''
        ),
        //calenderYear
        'calenderYear'=>array(
          'name'=>__('calenderYear', __FILE__),
          'id'=>'calenderYear',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderYear')
          ),
          'unite'=>''
        ),
        //calenderHour
        'calenderHour'=>array(
          'name'=>__('calenderHour', __FILE__),
          'id'=>'calenderHour',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderHour')
          ),
          'unite'=>''
        ),
        //calenderMinute
        'calenderMinute'=>array(
          'name'=>__('calenderMinute', __FILE__),
          'id'=>'calenderMinute',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'calenderMinute')
          ),
          'unite'=>''
        ),
        //debug0
        'debug0'=>array(
          'name'=>__('debug0', __FILE__),
          'id'=>'debug0',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'debug0')
          ),
          'unite'=>''
        ),
        //debug1
        'debug1'=>array(
          'name'=>__('debug1', __FILE__),
          'id'=>'debug1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'debug1')
          ),
          'unite'=>''
        ),
        //debug2
        'debug2'=>array(
          'name'=>__('debug2', __FILE__),
          'id'=>'debug2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'debug2')
          ),
          'unite'=>''
        ),
        //debug3
        'debug3'=>array(
          'name'=>__('debug3', __FILE__),
          'id'=>'debug3',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'debug3')
          ),
          'unite'=>''
        ),
        //debug4
        'debug4'=>array(
          'name'=>__('debug4', __FILE__),
          'id'=>'debug4',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'debug4')
          ),
          'unite'=>''
        ),
        //sensors
        //inputRoomTemperature
        'inputRoomTemperature'=>array(
          'name'=>__('Temp. sonde déportée', __FILE__),
          'id'=>'inputRoomTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputRoomTemperature')
          ),
          'unite'=>'°C'
        ),
        //inputFlameTemperature
        'inputFlameTemperature'=>array(
          'name'=>__('Temp. de flamme', __FILE__),
          'id'=>'inputFlameTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputFlameTemperature')
          ),
          'unite'=>'°C'
        ),
        //statusError
        'statusError'=>array(
          'name'=>__('Erreur', __FILE__),
          'id'=>'statusError',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusError')
          ),
          'unite'=>''
        ),
        //statusWarning
        'statusWarning'=>array(
          'name'=>__('Warning', __FILE__),
          'id'=>'statusWarning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusWarning')
          ),
          'unite'=>''
        ),
        //statusService
        'statusService'=>array(
          'name'=>__('statusService', __FILE__),
          'id'=>'statusService',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusService')
          ),
          'unite'=>''
        ),
        //outputDischargeMotor
        'outputDischargeMotor'=>array(
          'name'=>__('outputDischargeMotor', __FILE__),
          'id'=>'outputDischargeMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputDischargeMotor')
          ),
          'unite'=>''
        ),
        //outputDischargeCurrent
        'outputDischargeCurrent'=>array(
          'name'=>__('outputDischargeCurrent', __FILE__),
          'id'=>'outputDischargeCurrent',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputDischargeCurrent')
          ),
          'unite'=>''
        ),
        //outputIDFan
        'outputIDFan'=>array(
          'name'=>__('outputIDFan', __FILE__),
          'id'=>'outputIDFan',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputIDFan')
          ),
          'unite'=>''
        ),
        //outputIDFanTarget
        'outputIDFanTarget'=>array(
          'name'=>__('outputIDFanTarget', __FILE__),
          'id'=>'outputIDFanTarget',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputIDFanTarget')
          ),
          'unite'=>''
        ),
        //outputInsertionMotor
        'outputInsertionMotor'=>array(
          'name'=>__('outputInsertionMotor', __FILE__),
          'id'=>'outputInsertionMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputInsertionMotor')
          ),
          'unite'=>''
        ),
        //outputInsertionCurrent
        'outputInsertionCurrent'=>array(
          'name'=>__('outputInsertionCurrent', __FILE__),
          'id'=>'outputInsertionCurrent',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputInsertionCurrent')
          ),
          'unite'=>''
        ),
        //outputAirFlaps
        'outputAirFlaps'=>array(
          'name'=>__('outputAirFlaps', __FILE__),
          'id'=>'outputAirFlaps',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputAirFlaps')
          ),
          'unite'=>''
        ),
        //outputAirFlapsTargetPosition
        'outputAirFlapsTargetPosition'=>array(
          'name'=>__('outputAirFlapsTargetPosition', __FILE__),
          'id'=>'outputAirFlapsTargetPosition',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputAirFlapsTargetPosition')
          ),
          'unite'=>''
        ),
        //outputBurnBackFlapMagnet
        'outputBurnBackFlapMagnet'=>array(
          'name'=>__('outputBurnBackFlapMagnet', __FILE__),
          'id'=>'outputBurnBackFlapMagnet',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputBurnBackFlapMagnet')
          ),
          'unite'=>''
        ),
        //outputGridMotor
        'outputGridMotor'=>array(
          'name'=>__('outputGridMotor', __FILE__),
          'id'=>'outputGridMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputGridMotor')
          ),
          'unite'=>''
        ),
        //outputIgnition
        'outputIgnition'=>array(
          'name'=>__('outputIgnition', __FILE__),
          'id'=>'outputIgnition',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'outputIgnition')
          ),
          'unite'=>''
        ),
        //inputSafetyTemperatureLimiter
        'inputSafetyTemperatureLimiter'=>array(
          'name'=>__('inputSafetyTemperatureLimiter', __FILE__),
          'id'=>'inputSafetyTemperatureLimiter',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputSafetyTemperatureLimiter')
          ),
          'unite'=>''
        ),
        //inputUpperTemperatureLimiter
        'inputUpperTemperatureLimiter'=>array(
          'name'=>__('inputUpperTemperatureLimiter', __FILE__),
          'id'=>'inputUpperTemperatureLimiter',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputUpperTemperatureLimiter')
          ),
          'unite'=>''
        ),
        //inputPressureSwitch
        'inputPressureSwitch'=>array(
          'name'=>__('inputPressureSwitch', __FILE__),
          'id'=>'inputPressureSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputPressureSwitch')
          ),
          'unite'=>''
        ),
        //inputPressureSensor
        'inputPressureSensor'=>array(
          'name'=>__('inputPressureSensor', __FILE__),
          'id'=>'inputPressureSensor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputPressureSensor')
          ),
          'unite'=>''
        ),
        //inputGridContact
        'inputGridContact'=>array(
          'name'=>__('inputGridContact', __FILE__),
          'id'=>'inputGridContact',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputGridContact')
          ),
          'unite'=>''
        ),
        //inputDoor
        'inputDoor'=>array(
          'name'=>__('inputDoor', __FILE__),
          'id'=>'inputDoor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputDoor')
          ),
          'unite'=>''
        ),
        //inputCover
        'inputCover'=>array(
          'name'=>__('inputCover', __FILE__),
          'id'=>'inputCover',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputCover')
          ),
          'unite'=>''
        ),
        //inputExternalRequest
        'inputExternalRequest'=>array(
          'name'=>__('inputExternalRequest', __FILE__),
          'id'=>'inputExternalRequest',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputExternalRequest')
          ),
          'unite'=>''
        ),
        //inputBurnBackFlapSwitch
        'inputBurnBackFlapSwitch'=>array(
          'name'=>__('inputBurnBackFlapSwitch', __FILE__),
          'id'=>'inputBurnBackFlapSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputBurnBackFlapSwitch')
          ),
          'unite'=>''
        ),
        //inputFlueGasFlapSwitch
        'inputFlueGasFlapSwitch'=>array(
          'name'=>__('inputFlueGasFlapSwitch', __FILE__),
          'id'=>'inputFlueGasFlapSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputFlueGasFlapSwitch')
          ),
          'unite'=>''
        ),
        //inputBoardTemperature
        'inputBoardTemperature'=>array(
          'name'=>__('inputBoardTemperature', __FILE__),
          'id'=>'inputBoardTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputBoardTemperature')
          ),
          'unite'=>'°C'
        ),
        //inputZeroCrossingDelay
        'inputZeroCrossingDelay'=>array(
          'name'=>__('inputZeroCrossingDelay', __FILE__),
          'id'=>'inputZeroCrossingDelay',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputZeroCrossingDelay')
          ),
          'unite'=>''
        ),
        //inputCurrentStage
        'inputCurrentStage'=>array(
          'name'=>__('inputCurrentStage', __FILE__),
          'id'=>'inputCurrentStage',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputCurrentStage')
          ),
          'unite'=>''
        ),
        //inputTargetStagePID
        'inputTargetStagePID'=>array(
          'name'=>__('inputTargetStagePID', __FILE__),
          'id'=>'inputCurrentStage',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputTargetStagePID')
          ),
          'unite'=>''
        ),
        //inputCurrentStagePID
        'inputCurrentStagePID'=>array(
          'name'=>__('inputCurrentStagePID', __FILE__),
          'id'=>'inputCurrentStagePID',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'inputCurrentStagePID')
          ),
          'unite'=>''
        ),
        //statusMainState
        'statusMainState'=>array(
          'name'=>__('statusMainState', __FILE__),
          'id'=>'statusMainState',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusMainState')
          ),
          'unite'=>''
        ),
        //statusSubState
        'statusSubState'=>array(
          'name'=>__('statusSubState', __FILE__),
          'id'=>'statusSubState',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusSubState')
          ),
          'unite'=>''
        ),
        //parameterEcoModePossible
        'parameterEcoModePossible'=>array(
          'name'=>__('parameterEcoModePossible', __FILE__),
          'id'=>'parameterEcoModePossible',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterEcoModePossible')
          ),
          'unite'=>''
        ),
        //parameterFabricationNumber
        'parameterFabricationNumber'=>array(
          'name'=>__('parameterFabricationNumber', __FILE__),
          'id'=>'parameterFabricationNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterFabricationNumber')
          ),
          'unite'=>''
        ),
        //parameterStoveTypeNumber
        'parameterFabricationNumber'=>array(
          'name'=>__('parameterFabricationNumber', __FILE__),
          'id'=>'parameterFabricationNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterFabricationNumber')
          ),
          'unite'=>''
        ),
        //parameterSubTypeNumber
        'parameterSubTypeNumber'=>array(
          'name'=>__('parameterSubTypeNumber', __FILE__),
          'id'=>'parameterSubTypeNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterSubTypeNumber')
          ),
          'unite'=>''
        ),
        //parameterLanguageNumber
        'parameterLanguageNumber'=>array(
          'name'=>__('parameterLanguageNumber', __FILE__),
          'id'=>'parameterLanguageNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterLanguageNumber')
          ),
          'unite'=>''
        ),
        //parameterVersionMainBoard
        'parameterVersionMainBoard'=>array(
          'name'=>__('Version firmeware carte mère', __FILE__),
          'id'=>'parameterVersionMainBoard',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionMainBoard')
          ),
          'unite'=>''
        ),
        //parameterVersionTFT
        'parameterVersionTFT'=>array(
          'name'=>__('Version firmeware écran', __FILE__),
          'id'=>'parameterVersionTFT',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionTFT')
          ),
          'unite'=>''
        ),
        //parameterVersionMainBoardBootLoader
        'parameterVersionMainBoardBootLoader'=>array(
          'name'=>__('parameterVersionMainBoardBootLoader', __FILE__),
          'id'=>'parameterVersionMainBoardBootLoader',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionMainBoardBootLoader')
          ),
          'unite'=>''
        ),
        //parameterVersionTFTBootLoader
        'parameterVersionTFTBootLoader'=>array(
          'name'=>__('parameterVersionTFTBootLoader', __FILE__),
          'id'=>'parameterVersionTFTBootLoader',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionTFTBootLoader')
          ),
          'unite'=>''
        ),
        //parameterVersionMainBoardSub
        'parameterVersionMainBoardSub'=>array(
          'name'=>__('parameterVersionMainBoardSub', __FILE__),
          'id'=>'parameterVersionMainBoardSub',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionMainBoardSub')
          ),
          'unite'=>''
        ),
        //parameterVersionTFTSub
        'parameterVersionTFTSub'=>array(
          'name'=>__('parameterVersionTFTSub', __FILE__),
          'id'=>'parameterVersionTFTSub',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterVersionTFTSub')
          ),
          'unite'=>''
        ),
        //parameterRuntimePellets
        'parameterRuntimePellets'=>array(
          'name'=>__('parameterRuntimePellets', __FILE__),
          'id'=>'parameterRuntimePellets',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterRuntimePellets')
          ),
          'unite'=>''
        ),
        //parameterRuntimeLogs
        'parameterRuntimeLogs'=>array(
          'name'=>__('parameterRuntimeLogs', __FILE__),
          'id'=>'parameterRuntimeLogs',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterRuntimeLogs')
          ),
          'unite'=>''
        ),
        //parameterFeedRateTotal
        'parameterFeedRateTotal'=>array(
          'name'=>__('Conso. totale de pellet', __FILE__),
          'id'=>'parameterFeedRateTotal',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterFeedRateTotal')
          ),
          'unite'=>'kg'
        ),
        //parameterFeedRateService
        'parameterFeedRateService'=>array(
          'name'=>__('parameterFeedRateService', __FILE__),
          'id'=>'parameterFeedRateService',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterFeedRateService')
          ),
          'unite'=>''
        ),
        //parameterServiceCountdownKg
        'parameterServiceCountdownKg'=>array(
          'name'=>__('parameterServiceCountdownKg', __FILE__),
          'id'=>'parameterServiceCountdownKg',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterServiceCountdownKg')
          ),
          'unite'=>''
        ),
        //parameterServiceCountdownTime
        'parameterServiceCountdownTime'=>array(
          'name'=>__('parameterServiceCountdownTime', __FILE__),
          'id'=>'parameterServiceCountdownTime',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterServiceCountdownTime')
          ),
          'unite'=>''
        ),
        //parameterIgnitionCount
        'parameterIgnitionCount'=>array(
          'name'=>__('parameterIgnitionCount', __FILE__),
          'id'=>'parameterIgnitionCount',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterIgnitionCount')
          ),
          'unite'=>''
        ),
        //parameterOnOffCycleCount
        'parameterOnOffCycleCount'=>array(
          'name'=>__('parameterOnOffCycleCount', __FILE__),
          'id'=>'parameterOnOffCycleCount',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterOnOffCycleCount')
          ),
          'unite'=>''
        ),
        //parameterFlameSensorOffset
        'parameterFlameSensorOffset'=>array(
          'name'=>__('parameterFlameSensorOffset', __FILE__),
          'id'=>'parameterFlameSensorOffset',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterFlameSensorOffset')
          ),
          'unite'=>''
        ),
        //parameterPressureSensorOffset
        'parameterPressureSensorOffset'=>array(
          'name'=>__('parameterPressureSensorOffset', __FILE__),
          'id'=>'parameterPressureSensorOffset',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterPressureSensorOffset')
          ),
          'unite'=>''
        ),
        //parameterErrorCount0
        'parameterErrorCount0'=>array(
          'name'=>__('parameterErrorCount0', __FILE__),
          'id'=>'parameterErrorCount0',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount0')
          ),
          'unite'=>''
        ),
        //parameterErrorCount1
        'parameterErrorCount1'=>array(
          'name'=>__('parameterErrorCount1', __FILE__),
          'id'=>'parameterErrorCount1',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount1')
          ),
          'unite'=>''
        ),
        //parameterErrorCount2
        'parameterErrorCount2'=>array(
          'name'=>__('parameterErrorCount2', __FILE__),
          'id'=>'parameterErrorCount2',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount2')
          ),
          'unite'=>''
        ),
        //parameterErrorCount3
        'parameterErrorCount3'=>array(
          'name'=>__('parameterErrorCount3', __FILE__),
          'id'=>'parameterErrorCount3',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount3')
          ),
          'unite'=>''
        ),
        //parameterErrorCount4
        'parameterErrorCount4'=>array(
          'name'=>__('parameterErrorCount4', __FILE__),
          'id'=>'parameterErrorCount4',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount4')
          ),
          'unite'=>''
        ),
        //parameterErrorCount5
        'parameterErrorCount5'=>array(
          'name'=>__('parameterErrorCount5', __FILE__),
          'id'=>'parameterErrorCount5',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount5')
          ),
          'unite'=>''
        ),
        //parameterErrorCount6
        'parameterErrorCount6'=>array(
          'name'=>__('parameterErrorCount6', __FILE__),
          'id'=>'parameterErrorCount6',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount6')
          ),
          'unite'=>''
        ),
        //parameterErrorCount7
        'parameterErrorCount7'=>array(
          'name'=>__('parameterErrorCount7', __FILE__),
          'id'=>'parameterErrorCount7',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount7')
          ),
          'unite'=>''
        ),
        //parameterErrorCount8
        'parameterErrorCount8'=>array(
          'name'=>__('parameterErrorCount8', __FILE__),
          'id'=>'parameterErrorCount8',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount8')
          ),
          'unite'=>''
        ),
        //parameterErrorCount9
        'parameterErrorCount9'=>array(
          'name'=>__('parameterErrorCount9', __FILE__),
          'id'=>'parameterErrorCount9',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount9')
          ),
          'unite'=>''
        ),
        //parameterErrorCount10
        'parameterErrorCount10'=>array(
          'name'=>__('parameterErrorCount10', __FILE__),
          'id'=>'parameterErrorCount10',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount10')
          ),
          'unite'=>''
        ),
        //parameterErrorCount11
        'parameterErrorCount11'=>array(
          'name'=>__('parameterErrorCount11', __FILE__),
          'id'=>'parameterErrorCount11',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount11')
          ),
          'unite'=>''
        ),
        //parameterErrorCount12
        'parameterErrorCount12'=>array(
          'name'=>__('parameterErrorCount12', __FILE__),
          'id'=>'parameterErrorCount12',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount12')
          ),
          'unite'=>''
        ),
        //parameterErrorCount13
        'parameterErrorCount13'=>array(
          'name'=>__('parameterErrorCount13', __FILE__),
          'id'=>'parameterErrorCount13',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount13')
          ),
          'unite'=>''
        ),
        //parameterErrorCount14
        'parameterErrorCount14'=>array(
          'name'=>__('parameterErrorCount14', __FILE__),
          'id'=>'parameterErrorCount14',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount14')
          ),
          'unite'=>''
        ),
        //parameterErrorCount15
        'parameterErrorCount15'=>array(
          'name'=>__('parameterErrorCount15', __FILE__),
          'id'=>'parameterErrorCount15',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount15')
          ),
          'unite'=>''
        ),
        //parameterErrorCount16
        'parameterErrorCount16'=>array(
          'name'=>__('parameterErrorCount16', __FILE__),
          'id'=>'parameterErrorCount16',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount16')
          ),
          'unite'=>''
        ),
        //parameterErrorCount17
        'parameterErrorCount17'=>array(
          'name'=>__('parameterErrorCount17', __FILE__),
          'id'=>'parameterErrorCount17',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount17')
          ),
          'unite'=>''
        ),
        //parameterErrorCount18
        'parameterErrorCount18'=>array(
          'name'=>__('parameterErrorCount18', __FILE__),
          'id'=>'parameterErrorCount18',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount18')
          ),
          'unite'=>''
        ),
        //parameterErrorCount19
        'parameterErrorCount19'=>array(
          'name'=>__('parameterErrorCount19', __FILE__),
          'id'=>'parameterErrorCount19',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterErrorCount19')
          ),
          'unite'=>''
        ),
        //statusHeatingTimesNotProgrammed
        'statusHeatingTimesNotProgrammed'=>array(
          'name'=>__('statusHeatingTimesNotProgrammed', __FILE__),
          'id'=>'statusHeatingTimesNotProgrammed',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusHeatingTimesNotProgrammed')
          ),
          'unite'=>''
        ),
        //statusFrostStarted
        'statusFrostStarted'=>array(
          'name'=>__('statusFrostStarted', __FILE__),
          'id'=>'statusFrostStarted',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'statusFrostStarted')
          ),
          'unite'=>''
        ),
        //parameterSpiralMotorsTuning
        'parameterSpiralMotorsTuning'=>array(
          'name'=>__('parameterSpiralMotorsTuning', __FILE__),
          'id'=>'parameterSpiralMotorsTuning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterSpiralMotorsTuning')
          ),
          'unite'=>''
        ),
        //parameterIDFanTuning
        'parameterIDFanTuning'=>array(
          'name'=>__('parameterIDFanTuning', __FILE__),
          'id'=>'parameterIDFanTuning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterIDFanTuning')
          ),
          'unite'=>''
        ),
        //parameterCleanIntervalBig
        'parameterCleanIntervalBig'=>array(
          'name'=>__('parameterCleanIntervalBig', __FILE__),
          'id'=>'parameterCleanIntervalBig',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterCleanIntervalBig')
          ),
          'unite'=>''
        ),
        //parameterKgTillCleaning
        'parameterKgTillCleaning'=>array(
          'name'=>__('parameterKgTillCleaning', __FILE__),
          'id'=>'parameterKgTillCleaning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterKgTillCleaning')
          ),
          'unite'=>''
        ),
        //parameterDebug0
        'parameterDebug0'=>array(
          'name'=>__('parameterDebug0', __FILE__),
          'id'=>'parameterDebug0',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterDebug0')
          ),
          'unite'=>''
        ),
        //parameterDebug1
        'parameterDebug1'=>array(
          'name'=>__('parameterDebug1', __FILE__),
          'id'=>'parameterDebug1',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterDebug1')
          ),
          'unite'=>''
        ),
        //parameterDebug2
        'parameterDebug2'=>array(
          'name'=>__('parameterDebug2', __FILE__),
          'id'=>'parameterDebug2',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterDebug2')
          ),
          'unite'=>''
        ),
        //parameterDebug3
        'parameterDebug3'=>array(
          'name'=>__('parameterDebug3', __FILE__),
          'id'=>'parameterDebug3',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterDebug3')
          ),
          'unite'=>''
        ),
        //parameterDebug4
        'parameterDebug4'=>array(
          'name'=>__('parameterDebug4', __FILE__),
          'id'=>'parameterDebug4',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'parameterDebug4')
          ),
          'unite'=>''
        ),
        //stoveType
        'stoveType'=>array(
          'name'=>__('Type', __FILE__),
          'id'=>'stoveType',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'stoveType')
          ),
          'unite'=>''
        ),
        //stoveFeatures
        //multiAir1
        'multiAir1'=>array(
          'name'=>__('multiAir1', __FILE__),
          'id'=>'multiAir1',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'multiAir1')
          ),
          'unite'=>''
        ),
        //multiAir2
        'multiAir2'=>array(
          'name'=>__('multiAir2', __FILE__),
          'id'=>'multiAir2',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'multiAir2')
          ),
          'unite'=>''
        ),
        //insertionMotor
        'insertionMotor'=>array(
          'name'=>__('insertionMotor', __FILE__),
          'id'=>'insertionMotor',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'insertionMotor')
          ),
          'unite'=>''
        ),
        //airFlaps
        'airFlaps'=>array(
          'name'=>__('airFlaps', __FILE__),
          'id'=>'airFlaps',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'airFlaps')
          ),
          'unite'=>''
        ),
        //logRuntime
        'logRuntime'=>array(
          'name'=>__('logRuntime', __FILE__),
          'id'=>'logRuntime',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'logRuntime')
          ),
          'unite'=>''
        ),
        //local_statusCalculate
        'local_statusCalculate'=>array(
          'name'=>__('Statut', __FILE__),
          'id'=>'local_statusCalculate',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'local_statusCalculate')
          ),
          'unite'=>''
        ),
        //Refesh action
        'local_refresh'=>array(
          'name'=>__('Rafraichir', __FILE__),
          'id'=>'local_refresh',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'other',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>''
        ),
        //local_uptime
        'local_uptime'=>array(
          'name'=>__('Démarré depuis', __FILE__),
          'id'=>'local_uptime',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(
            0=>array('k1'=>'data', 'k2'=>'local_uptime')
          ),
          'unite'=>''
        )
      );

      return $stoveStructure;
    }

    private function cleanCookieFile($cookieFile){
      if (file_exists($cookieFile)===true){
        unlink($cookieFile);
      }
    }

    private function cleanJsonFile($jsonFile){
      if (file_exists($jsonFile)===true){
        unlink($jsonFile);
      }
    }

    private function rikaLogin($cookieFile){
      $postinfo = "email=".$this->getConfiguration('login')."&password=".$this->getConfiguration('password');
      $url='https://www.rika-firenet.com/web/login';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_NOBODY, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
      curl_setopt($ch, CURLOPT_USERAGENT,$this->getUA());
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POST, 1);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
      curl_setopt($ch, CURLOPT_TIMEOUT, 6);
      curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
      curl_setopt($ch, CURLOPT_URL, $url);
      $return = curl_exec($ch);
      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);
      curl_close($ch);

      if($curl_errno > 0){
        log::add('rikaha', 'error', 'FAILED rikaLogin URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        $this->cleanCookieFile($cookieFile);
        throw new Exception(__('Erreur lors du login, détails dans l\'error log',__FILE__));
      }elseif(trim($return)!='Found. Redirecting to /web/summary'){
        $this->cleanCookieFile($cookieFile);
        throw new Exception(__('Echec de l\'authentification vérifiez vos indentifiants',__FILE__));
      }
    }

    private function rikaStatus($cookieFile, $jsonFile){
      $fp = fopen ($jsonFile,"w");
      if ($fp === false) {
        log::add('rikaha', 'error', 'Failed to open json file');
        throw new Exception(__('Ouverture du fichier json impossible',__FILE__));
      }
      $url='https://www.rika-firenet.com/api/client/';


      $ch = curl_init();
      curl_setopt($ch, CURLOPT_USERAGENT,$this->getUA());
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_URL, $url.$this->getConfiguration('stoveid').'/status?nocache='.time().'260');
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
      curl_setopt($ch, CURLOPT_TIMEOUT, 6);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_FILE, $fp);
      $return = curl_exec($ch);

      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);

      curl_close($ch);
      fclose($fp);

      if($curl_errno > 0){
        log::add('rikaha', 'error', 'FAILED rikaStatus URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Erreur lors du status, détails dans l\'error log',__FILE__));
      }

      $data=file_get_contents($jsonFile);
      if($data===false){
        log::add('rikaha', 'error', 'Failed to read json file');
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Lecture du fichier json impossible',__FILE__));
      }

      if(strstr($data, 'is not registered for user')!==false){
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Echec de récupération des données, vérifiez le numéro du poêle',__FILE__));
      }
    }

    private function rikaLogout($cookieFile, $jsonFile){
      $url='https://www.rika-firenet.com/web/logout';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_NOBODY, TRUE);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
      curl_setopt($ch, CURLOPT_TIMEOUT, 6);
      curl_setopt($ch, CURLOPT_URL, $url);
      if (preg_match('`^https://`i', $url)){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      }
      $return = curl_exec($ch);

      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);

      curl_close($ch);

      if($curl_errno > 0){
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        log::add('rikaha', 'error', 'FAILED rikaStatus URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        throw new Exception(__('Erreur lors du logout, détails dans l\'error log',__FILE__));
      }
    }

    private function readJsonFile($jsonFile){
      if (file_exists($jsonFile)===false){
        log::add('rikaha', 'error', 'no json file: '.$jsonFile);
        throw new Exception(__('Erreur json file absent, détails dans l\'error log',__FILE__));
      }

      $data=file_get_contents($jsonFile);
      //log::add('rikaha', 'debug', $data);
      if($data===false){
        log::add('rikaha', 'error', 'Failed to read json file: '.$jsonFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Lecture du fichier json impossible, détails dans l\'error log',__FILE__));
      }

      return json_decode($data, true);
    }


    private function getUA(){
      return "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0";
    }

    private function translateOperatingMode($value=''){
      $translate='';
      switch ($value) {
        case 0:
          $translate=__('Manuel', __FILE__);
          break;
        case 1:
          $translate=__('Automatique', __FILE__);
          break;
        case 2:
          $translate=__('Confort', __FILE__);
          break ;
        default:
          $translate=$value;
      }
      return $translate;
    }

    private function translateStatus($statusMainState, $statusSubState){
      $translate='';

      switch ($statusMainState) {
        case 1:
          switch ($statusSubState) {
            case 0:
              $translate=__('Off', __FILE__);
              break ;
            case 1:
            case 3:
              $translate=__('Standby', __FILE__);
              break;
            case 2:
              $translate=__('Commande externe', __FILE__);
              break;
            default:
              $translate=__('Etat inconnu', __FILE__);
          }
          break;
        case 2:
          $translate=__('Réveil', __FILE__);
          break;
        case 3:
          $translate=__('Démarrage', __FILE__);
          break;
        case 4:
          $translate=__('Contrôle', __FILE__);
          break;
        case 5:
          switch ($statusSubState) {
            case 3:
            case 4:
              $translate=__('Nettoyage en profondeur', __FILE__);
              break;
            default:
              $translate=__('Nettoyage', __FILE__);
          }
          break;
        case 6:
          $translate=__('Fin de combustion', __FILE__);
          break;
        default:
          $translate=__('Etat inconnu', __FILE__);
      }

      return $translate;
    }

    private function translateUptime($value=0){
      $conv = array(86400,3600,60,1);
      $result = array(0,0,0,0);
      $i=0;

      while($value>0){
          $result[$i]= (int)($value/$conv[$i]);
          $value=$value-($result[$i]*$conv[$i]);
          $i++;
       }

       return $result[0].__('j',__FILE__).$result[1].'h'.$result[2].'m';
    }

    public function getInfo(){
      $cookieFile=jeedom::getTmpFolder('rikaha').'/rikaha_cookies_'.uniqid();
      $jsonFile=jeedom::getTmpFolder('rikaha').'/rikaha_json_'.uniqid().'.json';

      $this->rikaLogin($cookieFile);
      $this->rikaStatus($cookieFile, $jsonFile);
      $this->rikaLogout($cookieFile, $jsonFile);

      $this->cleanCookieFile($cookieFile);

      $stovedata=$this->readJsonFile($jsonFile);
      $this->cleanJsonFile($jsonFile);

      if($stovedata===false){
        log::add('rikaha', 'error', 'Failed to decode json: '.$jsonFile);
        throw new Exception(__('Impossible de décoder les donnés JSON, détails dans l\'error log',__FILE__));
      }
      if(is_array($stovedata)===false){
        log::add('rikaha', 'error', 'Failed to process data: '.$jsonFile);
        throw new Exception(__('Impossible de lire les données, détails dans l\'error log',__FILE__));
      }

      log::add('rikaha', 'debug', var_dump($stovedata));

      $stoveStructure=$this->getStoveStructure();
      $mainState="";
      $subState="";
      foreach ($stoveStructure as $key => $value) {
        if(substr($key, 0, 6)=='local_'){
          log::add('rikaha', 'debug', $key . ' skiped');
          continue;
        }
        $stoveValue=__('Not set',__FILE__);
        log::add('rikaha', 'debug', $value['parent']);
        if($value['parent']=='0'){
          if(array_key_exists($key, $stovedata)===true){
            $stoveValue=$stovedata[$key];

            switch ($key) {
              case 'lastSeenMinutes':
                $this->translateUptime($stoveValue*60);
                $name = $this->getCmd(null, 'local_uptime');
                if(is_object($name)){
                  $name->event($this->translateUptime($stoveValue*60));
                  $name->save();
                  log::add('rikaha', 'debug', 'local_uptime ('.$this->translateUptime($stoveValue*60).')'.' saved');
                }
                break;
            }

            $name = $this->getCmd(null, $value['id']);
            if(is_object($name)){
              $name->event($stoveValue);
              $name->save();
              log::add('rikaha', 'debug', $value['id'].' ('.$stoveValue.')'.' saved');
            }
          }
        }else{
          if(array_key_exists($value['parent'], $stovedata)===true){
            if(array_key_exists($key, $stovedata[$value['parent']])===true){
              $stoveValue=$stovedata[$value['parent']][$key];

              switch ($key) {
                case 'operatingMode':
                  $stoveValue=$this->translateOperatingMode($stoveValue);
                  break;
                case 'statusMainState':
                  $mainState=$stoveValue;
                  break;
                case 'statusSubState':
                  $subState=$stoveValue;
                  break;
              }

              $name = $this->getCmd(null, $value['id']);
              if(is_object($name)){
                $name->event($stoveValue);
                $name->save();
                log::add('rikaha', 'debug', $value['id'].' ('.$stoveValue.')'.' saved');
              }
            }
          }
        }
      }
      unset($value);

      if(trim($mainState)!='' && trim($subState)!=''){
        $name = $this->getCmd(null, 'local_statusCalculate');
        if(is_object($name)){
          $name->event($this->translateStatus($mainState, $subState));
          $name->save();
          log::add('rikaha', 'debug', 'local_statusCalculate ('.$this->translateStatus($mainState, $subState).')'.' saved');
        }
      }
    }

    public function preInsert() {
    }

    public function postInsert() {
    }

    public function preSave() {
    }

    public function postSave() {
    }

    public function preUpdate() {
      if (empty($this->getConfiguration('login'))) {
        throw new Exception(__('Vous avez oublié de saisir votre identifiant',__FILE__));
      }
      if (empty($this->getConfiguration('password'))) {
        throw new Exception(__('Vous avez oublié de saisir votre mot de passe',__FILE__));
      }
      if (empty($this->getConfiguration('stoveid'))) {
        throw new Exception(__('Vous avez oublié de saisir le numéro du poêle',__FILE__));
      }
    }

    public function postUpdate() {
      $stoveStructure=$this->getStoveStructure();

      foreach ($stoveStructure as $key => $value) {
        log::add('rikaha', 'debug', $value['name'].' in process');
        $rikahaCmd = $this->getCmd(null, $value['id']);
        if (!is_object($rikahaCmd)){
          $rikahaCmd=new rikahaCmd();
          $rikahaCmd->setLogicalId($value['id']);
          log::add('rikaha', 'debug', $value['name'].' /!\created');
        }
        $rikahaCmd->setName($value['name']);
        log::add('rikaha', 'debug', $value['name']);
        $rikahaCmd->setEqLogic_id($this->id);
        for($i=0;$i<count($value['configuration']);$i++){
          $rikahaCmd->setConfiguration($value['configuration'][$i]['k1'], $value['configuration'][$i]['k2']);
        }
        $rikahaCmd->setType($value['type']);
        $rikahaCmd->setSubType($value['subtype']);
        $rikahaCmd->setIsHistorized($value['historized']);
        $rikahaCmd->setIsVisible($value['visible']);
        if(trim($value['unite'])!=''){
          $rikahaCmd->setUnite($value['unite']);
        }
        $rikahaCmd->save();
        $rikahaCmd->refresh();
        log::add('rikaha', 'debug', $value['name'].' saved');

        unset($rikahaCmd);
      }
      unset($value);
      unset($stoveStructure);
    }

    public function preRemove() {

    }

    public function postRemove() {

    }

    public function toHtml($_version = 'dashboard') {
      $replace = $this->preToHtml($_version);
  		if (!is_array($replace)) {
  			return $replace;
  		}
      $version = jeedom::versionAlias($_version);

      $local_refresh = $this->getCmd(null, 'local_refresh');
      $replace['#local_refresh_id#'] = (is_object($local_refresh)) ? $local_refresh->getId() : '';

      $stoveType = $this->getCmd(null,'stoveType');
      $replace['#stoveType#'] = (is_object($stoveType)) ? $stoveType->execCmd() : '';
      $replace['#stoveType_display#'] = (is_object($stoveType) && $stoveType->getIsVisible()) ? "" : "display: none;";

      $local_statusCalculate = $this->getCmd(null,'local_statusCalculate');
      $replace['#local_statusCalculate#'] = (is_object($local_statusCalculate)) ? $local_statusCalculate->execCmd() : '';
      $replace['#local_statusCalculate_id#'] = is_object($local_statusCalculate) ? $local_statusCalculate->getId() : '';
      $replace['#local_statusCalculate_name#'] = is_object($local_statusCalculate) ? $local_statusCalculate->getName() : '';
      $replace['#local_statusCalculate_unite#'] = is_object($local_statusCalculate) ? $local_statusCalculate->getUnite() : '';
      $replace['#local_statusCalculate_display#'] = (is_object($local_statusCalculate) && $local_statusCalculate->getIsVisible()) ? "" : "display: none;";

      $operatingMode = $this->getCmd(null,'operatingMode');
      $replace['#operatingMode#'] = (is_object($operatingMode)) ? $operatingMode->execCmd() : '';
      $replace['#operatingMode_id#'] = is_object($operatingMode) ? $operatingMode->getId() : '';
      $replace['#operatingMode_name#'] = is_object($operatingMode) ? $operatingMode->getName() : '';
      $replace['#operatingMode_display#'] = (is_object($operatingMode) && $operatingMode->getIsVisible()) ? "" : "display: none;";

      $heatingPower = $this->getCmd(null,'heatingPower');
      $replace['#heatingPower#'] = (is_object($heatingPower)) ? $heatingPower->execCmd() : '';
      $replace['#heatingPower_id#'] = is_object($heatingPower) ? $heatingPower->getId() : '';
      $replace['#heatingPower_name#'] = is_object($heatingPower) ? $heatingPower->getName() : '';
      $replace['#heatingPower_unite#'] = is_object($heatingPower) ? $heatingPower->getUnite() : '';
      $replace['#heatingPower_display#'] = (is_object($heatingPower) && $heatingPower->getIsVisible()) ? "" : "display: none;";
      $replace['#heatingPower_histo#'] = (is_object($heatingPower) && $heatingPower->getIsHistorized()) ? " history cursor" : "";

      $inputFlameTemperature = $this->getCmd(null,'inputFlameTemperature');
      $replace['#inputFlameTemperature#'] = (is_object($inputFlameTemperature)) ? $inputFlameTemperature->execCmd() : '';
      $replace['#inputFlameTemperature_id#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getId() : '';
      $replace['#inputFlameTemperature_name#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getName() : '';
      $replace['#inputFlameTemperature_unite#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getUnite() : '';
      $replace['#inputFlameTemperature_display#'] = (is_object($inputFlameTemperature) && $inputFlameTemperature->getIsVisible()) ? "" : "display: none;";
      $replace['#inputFlameTemperature_histo#'] = (is_object($inputFlameTemperature) && $inputFlameTemperature->getIsHistorized()) ? " history cursor" : "";

      $targetTemperature = $this->getCmd(null,'targetTemperature');
      $replace['#targetTemperature#'] = (is_object($targetTemperature)) ? $targetTemperature->execCmd() : '';
      $replace['#targetTemperature_id#'] = is_object($targetTemperature) ? $targetTemperature->getId() : '';
      $replace['#targetTemperature_name#'] = is_object($targetTemperature) ? $targetTemperature->getName() : '';
      $replace['#targetTemperature_unite#'] = is_object($targetTemperature) ? $targetTemperature->getUnite() : '';
      $replace['#targetTemperature_display#'] = (is_object($targetTemperature) && $targetTemperature->getIsVisible()) ? "" : "display: none;";
      $replace['#targetTemperature_histo#'] = (is_object($targetTemperature) && $targetTemperature->getIsHistorized()) ? " history cursor" : "";

      $inputRoomTemperature = $this->getCmd(null,'inputRoomTemperature');
      $replace['#inputRoomTemperature#'] = (is_object($inputRoomTemperature)) ? $inputRoomTemperature->execCmd() : '';
      $replace['#inputRoomTemperature_id#'] = is_object($inputRoomTemperature) ? $inputRoomTemperature->getId() : '';
      $replace['#inputRoomTemperature_name#'] = is_object($inputRoomTemperature) ? $inputRoomTemperature->getName() : '';
      $replace['#inputRoomTemperature_unite#'] = is_object($inputRoomTemperature) ? $inputRoomTemperature->getUnite() : '';
      $replace['#inputRoomTemperature_display#'] = (is_object($inputRoomTemperature) && $inputRoomTemperature->getIsVisible()) ? "" : "display: none;";
      $replace['#inputRoomTemperature_histo#'] = (is_object($inputRoomTemperature) && $inputRoomTemperature->getIsHistorized()) ? " history cursor" : "";

      $frostProtectionTemperature = $this->getCmd(null,'frostProtectionTemperature');
      $replace['#frostProtectionTemperature#'] = (is_object($frostProtectionTemperature)) ? $frostProtectionTemperature->execCmd() : '';
      $replace['#frostProtectionTemperature_id#'] = is_object($frostProtectionTemperature) ? $frostProtectionTemperature->getId() : '';
      $replace['#frostProtectionTemperature_name#'] = is_object($frostProtectionTemperature) ? $frostProtectionTemperature->getName() : '';
      $replace['#frostProtectionTemperature_unite#'] = is_object($frostProtectionTemperature) ? $frostProtectionTemperature->getUnite() : '';
      $replace['#frostProtectionTemperature_display#'] = (is_object($frostProtectionTemperature) && $frostProtectionTemperature->getIsVisible()) ? "" : "display: none;";
      $replace['#frostProtectionTemperature_histo#'] = (is_object($frostProtectionTemperature) && $frostProtectionTemperature->getIsHistorized()) ? " history cursor" : "";

      $frostProtectionActive = $this->getCmd(null,'frostProtectionActive');
      $replace['#frostProtectionActive#'] = (is_object($frostProtectionActive)) ? $frostProtectionActive->execCmd() : '';
      $replace['#frostProtectionActive_id#'] = is_object($frostProtectionActive) ? $frostProtectionActive->getId() : '';
      $replace['#frostProtectionActive_name#'] = is_object($frostProtectionActive) ? $frostProtectionActive->getName() : '';
      $replace['#frostProtectionActive_display#'] = (is_object($frostProtectionActive) && $frostProtectionActive->getIsVisible()) ? "" : "display: none;";

      $onOff = $this->getCmd(null,'onOff');
      $replace['#onOff#'] = (is_object($onOff)) ? $onOff->execCmd() : '';
      $replace['#onOff_id#'] = is_object($onOff) ? $onOff->getId() : '';
      $replace['#onOff_name#'] = is_object($onOff) ? $onOff->getName() : '';
      $replace['#onOff_display#'] = (is_object($onOff) && $onOff->getIsVisible()) ? "" : "display: none;";

      $parameterFeedRateTotal = $this->getCmd(null,'parameterFeedRateTotal');
      $replace['#parameterFeedRateTotal#'] = (is_object($parameterFeedRateTotal)) ? $parameterFeedRateTotal->execCmd() : '';
      $replace['#parameterFeedRateTotal_id#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getId() : '';
      $replace['#parameterFeedRateTotal_name#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getName() : '';
      $replace['#parameterFeedRateTotal_unite#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getUnite() : '';
      $replace['#parameterFeedRateTotal_display#'] = (is_object($parameterFeedRateTotal) && $parameterFeedRateTotal->getIsVisible()) ? "" : "display: none;";
      $replace['#parameterFeedRateTotal_histo#'] = (is_object($parameterFeedRateTotal) && $parameterFeedRateTotal->getIsHistorized()) ? " history cursor" : "";


      $local_uptime = $this->getCmd(null,'local_uptime');
      $replace['#local_uptime#'] = (is_object($local_uptime)) ? $local_uptime->execCmd() : '';
      $replace['#local_uptime_id#'] = is_object($local_uptime) ? $local_uptime->getId() : '';
      $replace['#local_uptime_name#'] = is_object($local_uptime) ? $local_uptime->getName() : '';
      $replace['#local_uptime_display#'] = (is_object($local_uptime) && $local_uptime->getIsVisible()) ? "" : "display: none;";

      $parameterVersionMainBoard = $this->getCmd(null,'parameterVersionMainBoard');
      $replace['#parameterVersionMainBoard#'] = (is_object($parameterVersionMainBoard)) ? $parameterVersionMainBoard->execCmd() : '';
      $replace['#parameterVersionMainBoard_id#'] = is_object($parameterVersionMainBoard) ? $parameterVersionMainBoard->getId() : '';
      $replace['#parameterVersionMainBoard_name#'] = is_object($parameterVersionMainBoard) ? $parameterVersionMainBoard->getName() : '';
      $replace['#parameterVersionMainBoard_display#'] = (is_object($parameterVersionMainBoard) && $parameterVersionMainBoard->getIsVisible()) ? "" : "display: none;";

      $parameterVersionTFT = $this->getCmd(null,'parameterVersionTFT');
      $replace['#parameterVersionTFT#'] = (is_object($parameterVersionTFT)) ? $parameterVersionTFT->execCmd() : '';
      $replace['#parameterVersionTFT_id#'] = is_object($parameterVersionTFT) ? $parameterVersionTFT->getId() : '';
      $replace['#parameterVersionTFT_name#'] = is_object($parameterVersionTFT) ? $parameterVersionTFT->getName() : '';
      $replace['#parameterVersionTFT_display#'] = (is_object($parameterVersionTFT) && $parameterVersionTFT->getIsVisible()) ? "" : "display: none;";

      $statusError = $this->getCmd(null,'statusError');
      $replace['#statusError#'] = (is_object($statusError)) ? $statusError->execCmd() : '';
      $replace['#statusError_id#'] = is_object($statusError) ? $statusError->getId() : '';
      $replace['#statusError_name#'] = is_object($statusError) ? $statusError->getName() : '';
      $replace['#statusError_display#'] = (is_object($statusError) && $statusError->getIsVisible()) ? "" : "display: none;";

      $statusWarning = $this->getCmd(null,'statusWarning');
      $replace['#statusWarning#'] = (is_object($statusWarning)) ? $statusWarning->execCmd() : '';
      $replace['#statusWarning_id#'] = is_object($statusWarning) ? $statusWarning->getId() : '';
      $replace['#statusWarning_name#'] = is_object($statusWarning) ? $statusWarning->getName() : '';
      $replace['#statusWarning_display#'] = (is_object($statusWarning) && $statusWarning->getIsVisible()) ? "" : "display: none;";

      $html = template_replace($replace, getTemplate('core', $_version, 'rikaha','rikaha'));

  		cache::set('rikahaWidget' . $_version . $this->getId(), $html, 0);
  		return $html;

    }

    /*
     * Non obligatoire mais ca permet de déclencher une action après modification de variable de configuration
    public static function postConfig_<Variable>() {
    }
     */

    /*
     * Non obligatoire mais ca permet de déclencher une action avant modification de variable de configuration
    public static function preConfig_<Variable>() {
    }
     */



    /*     * **********************Getteur Setteur*************************** */

}

class rikahaCmd extends cmd {
    /*     * *************************Attributs****************************** */


    /*     * ***********************Methode static*************************** */


    /*     * *********************Methode d'instance************************* */

    /*
     * Non obligatoire permet de demander de ne pas supprimer les commandes même si elles ne sont pas dans la nouvelle configuration de l'équipement envoyé en JS
      public function dontRemoveCmd() {
      return true;
      }
     */

    public function execute($_options = array()) {
      log::add('rikaha', 'debug', $this->getLogicalId());
      if ($this->getLogicalId() == 'local_refresh') {
        log::add('rikaha', 'debug', 'Call refresh action');
        $this->getEqLogic()->getInfo();
      }
      return false;
    }

    /*     * **********************Getteur Setteur*************************** */
}
