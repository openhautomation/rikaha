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
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      foreach (eqLogic::byType('rikaha') as $rikaha) {
      }
    }
    */
    public static function cron5() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      foreach (eqLogic::byType('rikaha') as $rikaha) {
        $rikaha->getInfo();
        $rikaha->calcTankLevel();
        // Dashboard
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
      }
    }

    public static function cron15() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      foreach (eqLogic::byType('rikaha') as $rikaha) {
        $rikaha->getInfo();
        $rikaha->calcTankLevel();
        // Dashboard
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
      }
    }

    public static function cron30() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      foreach (eqLogic::byType('rikaha') as $rikaha) {
        $rikaha->getInfo();
        $rikaha->calcTankLevel();
        // Dashboard
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
      }
    }

    public static function cronHourly() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      foreach (eqLogic::byType('rikaha') as $rikaha) {
        $rikaha->getInfo();
        $rikaha->calcTankLevel();
        // Dashboard
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
      }
    }
    /*
    public static function cronDaily() {
    }
    */

    /*     * *********************Méthodes d'instance************************* */
    private function getStoveStructure(&$stoveStructure){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
          'unite'=>''
        ),
        //operatingMode
        'operatingMode'=>array(
          'name'=>__('Mode', __FILE__),
          'id'=>'operatingMode',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
          'unite'=>''
        ),
        //parameterRuntimePellets
        'parameterRuntimePellets'=>array(
          'name'=>__('Utilisation mode pellet', __FILE__),
          'id'=>'parameterRuntimePellets',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>'h'
        ),
        //parameterRuntimeLogs
        'parameterRuntimeLogs'=>array(
          'name'=>__('Utilisation mode bois', __FILE__),
          'id'=>'parameterRuntimeLogs',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>'h'
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
          'configuration'=>array(),
          'unite'=>'kg'
        ),
        //parameterFeedRateService
        'parameterFeedRateService'=>array(
          'name'=>__('Conso. avant entretien', __FILE__),
          'id'=>'parameterFeedRateService',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>'kg'
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
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
          'configuration'=>array(),
          'unite'=>''
        ),
        //local_tankLevel
        'local_tankLevel'=>array(
          'name'=>__('Niveau du réservoir à pellet', __FILE__),
          'id'=>'local_tankLevel',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>'kg'
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
          'configuration'=>array(),
          'unite'=>''
        ),
        //local_uptime
        'local_downtime'=>array(
          'name'=>__('Hors ligne depuis', __FILE__),
          'id'=>'local_downtime',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
          'unite'=>''
        ),
        'local_lastupdate'=>array(
          'name'=>__('Dernière maj', __FILE__),
          'id'=>'local_lastupdate',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(),
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
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'getInfo')),
          'unite'=>''
        ),
        //Set target temp. action
        'local_settargetTemperature'=>array(
          'name'=>__('Modifier la temp. de consigne', __FILE__),
          'id'=>'local_settargetTemperature',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('Valeur de la température', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'settargetTemperature'),array('k1'=>'stovekey', 'k2'=>'targetTemperature')),
          'unite'=>''
        ),
        //Set target temp. action
        'local_setoperatingMode'=>array(
          'name'=>__('Modifier le mode', __FILE__),
          'id'=>'local_setoperatingMode',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('0=MANUEL, 1=AUTOMATIQUE, 2=CONFORT', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setoperatingMode'),array('k1'=>'stovekey', 'k2'=>'operatingMode')),
          'unite'=>''
        ),

        //Set OnOff action
        'local_setonOff'=>array(
          'name'=>__("Modifier état", __FILE__),
          'id'=>'local_setonOff',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('0=OFF, 1=ON', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setonOff'),array('k1'=>'stovekey', 'k2'=>'onOff')),
          'unite'=>''
        ),
        //Set OnOff action
        'local_setheatingPower'=>array(
          'name'=>__("Modifier la puissance", __FILE__),
          'id'=>'local_setheatingPower',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('De 30-100 pas de 5', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setheatingPower'),array('k1'=>'stovekey', 'k2'=>'heatingPower')),
          'unite'=>''
        ),
        //Set fulltank action
        'local_setfullTank'=>array(
          'name'=>__("Plein du réservoir fait", __FILE__),
          'id'=>'local_setfullTank',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          //'message_placeholder'=> __('Capacité du réservoir', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>1,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setfullTank'),array('k1'=>'stovekey', 'k2'=>'tankLevel')),
          'unite'=>''
        )
      );
    }

    private function cleanCookieFile($cookieFile){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      if (file_exists($cookieFile)===true){
        unlink($cookieFile);
      }
    }

    private function cleanJsonFile($jsonFile){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      if (file_exists($jsonFile)===true){
        unlink($jsonFile);
      }
    }

    private function rikaLogin($cookieFile){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      $postinfo = "email=".$this->getConfiguration('login')."&password=".$this->getConfiguration('password');
      $url='https://www.rika-firenet.com/web/login';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

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

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
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
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' FAILED rikaControls URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        return false;
      }elseif(trim($return)!='Found. Redirecting to /web/summary'){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' auth FAILED check your login/password');
        return false;
      }
      return true;
    }

    private function rikaStatus($cookieFile, $jsonFile){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      $fp = fopen ($jsonFile,"w");
      if ($fp === false) {
        log::add('rikaha', 'error', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to open json file');
        return false;
      }
      $url='https://www.rika-firenet.com/api/client/';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

      curl_setopt($ch, CURLOPT_USERAGENT,$this->getUA());
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_URL, $url.$this->getConfiguration('stoveid').'/status?nocache='.round(microtime(true)*1000,0));
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_FILE, $fp);
      $return = curl_exec($ch);

      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);

      curl_close($ch);
      fclose($fp);

      if($curl_errno > 0){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' FAILED rikaControls URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        return false;
      }

      $data=file_get_contents($jsonFile);
      if($data===false){
        log::add('rikaha', 'error', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to read json file');
        return false;
      }
      if(strstr($data, 'is not registered for user')!==false){
        log::add('rikaha', 'error', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to get stove data check your stove number');
        return false;
      }
      return true;
    }

    private function rikaControls($cookieFile='', $data=''){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      if(trim($data=='')){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' POST fields not valid');
        return false;
      }

      $postfields=http_build_query($data, "\n");
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ' . $postfields);
      $url = 'https://www.rika-firenet.com/api/client/';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);

      curl_setopt($ch, CURLOPT_USERAGENT,$this->getUA());
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_URL, $url.$this->getConfiguration('stoveid').'/controls?nocache='.round(microtime(true)*1000,0));
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
      curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded'));

      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_HEADER, 0);

      $return = curl_exec($ch);
      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);

      curl_close($ch);

      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ' . $return);

      if($curl_errno > 0){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' FAILED rikaControls URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        return false;
      }
      if(strstr($data, 'OK')===false){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' write stove request FAILED: ' . $return);
        return false;
      }
      return true ;
    }

    private function rikaLogout($cookieFile=''){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
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
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' FAILED rikaControls URL: \''.$url.'\' errno: '.$curl_errno.' error: '.$curl_error);
        return false;
      }
      return true;
    }

    private function readJsonFile($jsonFile){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      if (file_exists($jsonFile)===false){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' no json file: '.$jsonFile);
        return false;
      }

      $data=file_get_contents($jsonFile);
      if($data===false){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to read json file: '.$jsonFile);
        return false;
      }

      return json_decode($data, true);
    }


    private function getUA(){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      return "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0";
    }

    private function translateOperatingMode($value=''){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called params: '.$value);

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
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called params: '.$statusMainState. ' & '.$statusSubState);

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
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

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

    private function inRange($val, $min, $max){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      return ($val >= $min && $val <= $max);
    }

    private function cmdSave($cmd, $data){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      if(is_bool($data===true)===true){
        if($data===true){
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ' . $cmd . ' TRUE');
        }else{
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ' . $cmd . ' FALSE');
        }
      }else{
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ' . $cmd . ' ' . $data);
      }

      $name = $this->getCmd(null, $cmd);
      if(is_object($name)){
        $name->event($data);
        if($name->getIsHistorized()){
          $name->addHistoryValue($data);
        }
        $name->save();
        if($name->getSubtype()=='binary'){
          switch ($data) {
            case 0:
              $data="FALSE";
              break;
            case 1:
              $data="TRUE";
              break;
            default:
              $data="NOT binary value";
            }
        }
        //log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' ID: ' . $cmd . ' Subtype: '.$name->getSubtype().' Value: '.$data.' saved');
      }
    }

    public function getInfo(){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      $cookieFile=jeedom::getTmpFolder('rikaha').'/rikaha_cookies_'.uniqid();
      $jsonFile=jeedom::getTmpFolder('rikaha').'/rikaha_json_'.uniqid().'.json';

      //rikaLogin
      if($this->rikaLogin($cookieFile)===false){
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }
      //rikaControls
      if($this->rikaStatus($cookieFile, $jsonFile)===false){
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }
      //rikaLogout
      if($this->rikaLogout($cookieFile)===false){
        $this->cleanCookieFile($cookieFile);
        $this->cleanJsonFile($jsonFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }

      $stovedata=$this->readJsonFile($jsonFile);

      $this->cleanCookieFile($cookieFile);
      $this->cleanJsonFile($jsonFile);

      if($stovedata===false){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to decode json: '.$jsonFile);
        throw new Exception(__('Impossible de décoder les données JSON, merci de consulter vos logs en mode debug',__FILE__));
      }
      if(is_array($stovedata)===false){
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Failed to process data: '.$jsonFile);
        throw new Exception(__('Impossible de lire les données, merci de consulter vos logs en mode debug',__FILE__));
      }

      $this->getStoveStructure($stoveStructure);
      $mainState="";
      $subState="";
      foreach ($stoveStructure as $key => $value) {
        if(substr($key, 0, 6)=='local_'){
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' '. $key . ' skiped');
          continue;
        }
        $stoveValue=__('Not set',__FILE__);
        if($value['parent']=='0'){
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' NO parent found');

          if(array_key_exists($key, $stovedata)===true){
            $stoveValue=$stovedata[$key];
            switch ($key) {
              case 'lastSeenMinutes':
                $this->cmdSave('local_downtime', $this->translateUptime($stoveValue*60));
                break;
            }
            $this->cmdSave($value['id'], $stoveValue);
          }
        }else{
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' parent found: '. $value['parent']);

          if(array_key_exists($value['parent'], $stovedata)===true){
            if(array_key_exists($key, $stovedata[$value['parent']])===true){
              $stoveValue=$stovedata[$value['parent']][$key];
              switch ($key) {
                case 'statusMainState':
                  $mainState=$stoveValue;
                  break;
                case 'statusSubState':
                  $subState=$stoveValue;
                  break;
                case 'inputRoomTemperature':
                  if($stoveValue==1024){
                    // 1024: pile de la sonde HS ou PAS de sonde
                    $stoveValue=0;
                  }
                  break;
              }
              $this->cmdSave($value['id'], $stoveValue);
            }
          }
        }
      }
      unset($value);

      // Store calculate status
      if(trim($mainState)!='' && trim($subState)!=''){
        $this->cmdSave('local_statusCalculate', $this->translateStatus($mainState, $subState));
      }
      // Store last update
      $this->cmdSave('local_lastupdate', date('d-m-Y H:i:s'));
      $this->refreshWidget();
    }

    public function controlStove($stovekey='', $_options=array()){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' started');

      $returnValue=false;
      /*
      * Target value
      */
      $targetValue='';
      if(is_array($_options)===true){
        if(array_key_exists('message', $_options)===true){
          $targetValue=trim($_options['message']);
        }
      }else{
        $targetValue=trim($_options);
      }

      $nbrRetryGlobal=4;
      $nbrRetrybeforeCheck=2;

      for($i=0 ; $i<$nbrRetryGlobal ; $i++){
        for($j=0 ; $j<$nbrRetrybeforeCheck ; $j++){
          $this->getInfo();
          sleep(2);
          $this->setStove($stovekey, $_options);
          sleep(10);
        }
        $this->getInfo();
        $currentValue='';
        $objValue=$this->getCmd(null, $stovekey);
        if(is_object($objValue)){
          $currentValue=$objValue->execCmd();
        }

        if($currentValue==$targetValue){
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' ------------ update OK');
          $returnValue=true;
          break;
        }
      }

      return $returnValue;
    }

    public function setStove($stovekey='', $_options=array()){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called stovekey: ' . $stovekey . ' _options: '. json_encode($_options));

      $valideKeys=array(
        'targetTemperature' => '',
        'onOff'             => '',
        'operatingMode'     => '',
        'heatingPower'      => ''
      );

      if(array_key_exists($stovekey, $valideKeys)===false){
        log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' key: '. $stovekey .' not found in allowed structure');
        throw new Exception(__('Action impossible à réaliser sur votre poêle, merci de consulter vos logs en mode debug',__FILE__));
      }

      $stoveStructure=array();
      // Set required
      $revision=$this->getCmd(null,'revision');
      if(is_object($revision)){
        $stoveStructure['revision']=$revision->execCmd();
      }
      $onOff=$this->getCmd(null,'onOff');
      if(is_object($onOff)){
        $stoveStructure['onOff']=$onOff->execCmd();
      }
      $heatingPower=$this->getCmd(null,'heatingPower');
      if(is_object($heatingPower)){
        $stoveStructure['heatingPower']=$heatingPower->execCmd();
      }

      // Change value
      if(is_array($_options)===true){
        if(array_key_exists('message', $_options)===true){
          $stoveStructure[$stovekey]=trim($_options['message']);
        }
      }else{
        $stoveStructure[$stovekey]=trim($_options);
      }

      // Specifics process
      foreach(array_keys($stoveStructure) as $key){
        switch ($key) {
          case 'onOff':
            if($stoveStructure[$key]==1){
              $stoveStructure[$key]='true';
            }else{
              $stoveStructure[$key]='false';
            }
            break;
          case 'heatingPower':
            if($this->inRange($stoveStructure[$key], 30, 100)===false){
              $stoveStructure[$key]=50;
            }
            break ;
        }
      }

      foreach ($stoveStructure as $key => $value) {
        if(trim($value)==''){
          log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' key: '. $stovekey .' is not set');
          throw new Exception(__('Des données sont manquantes afin de realiser cette action sur votre poêle, merci de consulter vos logs en mode debug',__FILE__));
        }
      }

      $cookieFile=jeedom::getTmpFolder('rikaha').'/rikaha_cookies_'.uniqid();
      //rikaLogin
      if($this->rikaLogin($cookieFile)===false){
        $this->cleanCookieFile($cookieFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }
      //rikaControls
      if($this->rikaControls($cookieFile, $stoveStructure)===false){
        $this->cleanCookieFile($cookieFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }
      //rikaLogout
      if($this->rikaLogout($cookieFile)===false){
        $this->cleanCookieFile($cookieFile);
        throw new Exception(__('Votre action a èchouée, merci de consulter vos logs en mode debug',__FILE__));
      }
      $this->cleanCookieFile($cookieFile);

      /*
      $name = $this->getCmd(null, $stovekey);
      if(is_object($name)){
        $name->event($stoveStructure[$stovekey]);
        $name->save();
        log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' Obj: '.$stovekey.' data: ' .$stoveStructure[$stovekey].' saved');
      }
      */

      return true ;
    }

    public function calcTankLevel(){
      if($this->getConfiguration('tankcapacity')>0){
        $local_tankLevel=$this->getCmd(null,'local_tankLevel');
        if(is_object($local_tankLevel)){
          $currentTankLevel=$local_tankLevel->execCmd();
          if($currentTankLevel>0){
            $endUT=time();
            $startUT=$endUT-7200; // 2 heures
            $start = date("Y-m-d H:i:s", $startUT);
            $end = date("Y-m-d H:i:s", $endUT);
            log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' start: ' . $start);
            log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' end: ' . $end);

            $parameterFeedRateTotal=$this->getCmd(null,'parameterFeedRateTotal');
            if(is_object($parameterFeedRateTotal)){
              $currentCons=$parameterFeedRateTotal->execCmd();
              log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' current value: ' . $currentCons);

              $histovalue=$parameterFeedRateTotal->getHistory($start, $end) ;
              $targetIndex=count($histovalue)-2;
              if($targetIndex>-1){
                $previusCons=$histovalue[$targetIndex]->getValue();
                log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' previus value: ' . $previusCons);

                $cons=$currentCons-$previusCons;
                if($cons>0){
                  $newTankLevel=$currentTankLevel-$cons;
                  if($newTankLevel<0){
                    $newTankLevel=0;
                  }
                  $this->cmdSave('local_tankLevel', $newTankLevel);
                  log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' New tank level: '.$newTankLevel);
                }
              }else{
                log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' Not enough history tu calc consumption');
              }
            }
          }
        }
      }

      return true;
    }

    public function setfullTank(){
      $this->cmdSave('local_tankLevel', $this->getConfiguration('tankcapacity'));
      return true;
    }

    public function preInsert() {
    }

    public function postInsert() {
    }

    public function preSave() {
      $this->setDisplay("width","300px");
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
      if (trim($this->getConfiguration('tankcapacity'))=='' || $this->getConfiguration('tankcapacity') < 0 ) {
        throw new Exception(__('Vous avez oublié de saisir la capacité du réservoir de pellet (en Kg)',__FILE__));
      }
    }

    public function postUpdate() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      $this->getStoveStructure($stoveStructure);

      foreach ($stoveStructure as $key => $value) {
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$value['name'].' in process');

        $rikahaCmd = $this->getCmd(null, $value['id']);
        if (!is_object($rikahaCmd)){
          $rikahaCmd=new rikahaCmd();
          $rikahaCmd->setLogicalId($value['id']);
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$value['name'].' created');
        }

        $rikahaCmd->setName($value['name']);
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
        if(array_key_exists('message_placeholder', $value)===true){
          $rikahaCmd->setDisplay('message_placeholder', $value['message_placeholder']);
        }
        if(array_key_exists('title_disable', $value)===true){
          $rikahaCmd->setDisplay('title_disable', $value['title_disable']);
        }

        $rikahaCmd->save();
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$value['name'].' saved');
        unset($rikahaCmd);
      }
      unset($value);
      unset($stoveStructure);

      $this->cmdSave('local_tankLevel', 0);
    }

    public function preRemove() {
    }

    public function postRemove() {
    }

    public static $_widgetPossibility = array('custom' => array(
        'visibility'         => true,
        'displayName'        => true,
        'displayObjectName'  => true,
        'optionalParameters' => false,
        'background-color'   => true,
        'text-color'         => true,
        'border'             => true,
        'border-radius'      => true,
        'background-opacity' => true,
    ));

    public function HtmlBuildOptions($data=array(), $selected=''){
      $SO='<option value="...">...</option>';
      for($i=0;$i<count($data);$i++){
        if(trim($selected)==trim($data[$i]['value'])){
          $SO.='<option selected="selected" value="'.$data[$i]['value'].'">'.$data[$i]['label'].'</option>';
          continue;
        }
        $SO.='<option value="'.$data[$i]['value'].'">'.$data[$i]['label'].'</option>';
      }
      return $SO;
    }

    public function toHtml($_version = 'dashboard') {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      $replace = $this->preToHtml($_version);
  		if (!is_array($replace)) {
  			return $replace;
  		}
      $version = jeedom::versionAlias($_version);

      $local_refresh = $this->getCmd(null, 'local_refresh');
      $replace['#local_refresh_id#'] = (is_object($local_refresh)) ? $local_refresh->getId() : '';

      $local_lastupdate = $this->getCmd(null,'local_lastupdate');
      $replace['#local_lastupdate#'] = (is_object($local_lastupdate)) ? $local_lastupdate->execCmd() : '';
      $replace['#local_lastupdate_name#'] = is_object($local_lastupdate) ? $local_lastupdate->getName() : '';

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
      $local_setoperatingMode = $this->getCmd(null,'local_setoperatingMode');
      $replace['#local_setoperatingMode_id#'] = is_object($local_setoperatingMode) ? $local_setoperatingMode->getId() : '';
      $replace['#operatingMode_name#'] = is_object($operatingMode) ? $operatingMode->getName() : '';
      $options = array();
      $selected= is_object($operatingMode) ? $operatingMode->execCmd() : '';
      for($i=0;$i<3;$i++){
        $options[]=array('value'=>$i, 'label'=>$this->translateOperatingMode($i));
      }
      $replace['#operatingMode_options#']=$this->HtmlBuildOptions($options, $selected);
      $replace['#operatingMode_display#'] = (is_object($operatingMode) && $operatingMode->getIsVisible()) ? "" : "display: none;";

      $local_setheatingPower = $this->getCmd(null,'local_setheatingPower');
      $replace['#local_setheatingPower_id#'] = is_object($local_setheatingPower) ? $local_setheatingPower->getId() : '';
      $heatingPower = $this->getCmd(null,'heatingPower');
      $options  = array();
      $unite    = is_object($heatingPower) ? $heatingPower->getUnite() : '';
      $selected = is_object($heatingPower) ? $heatingPower->execCmd() : '';
      for($i=30;$i<105;){
        $options[]=array('value'=>$i, 'label'=>$i.$unite);
        $i+=5;
      }
      $replace['#heatingPower#'] = $selected;
      $replace['#heatingPower_id#'] = is_object($heatingPower) ? $heatingPower->getId() : '';
      $replace['#heatingPower_name#'] = is_object($heatingPower) ? $heatingPower->getName() : '';
      $replace['#heatingPower_options#']=$this->HtmlBuildOptions($options, $selected);
      if($operatingMode->execCmd() == 2){
        $replace['#heatingPower_display#']="display: none;";
      }else{
        $replace['#heatingPower_display#'] = (is_object($heatingPower) && $heatingPower->getIsVisible()) ? "" : "display: none;";
      }
      $replace['#heatingPower_histo#'] = (is_object($heatingPower) && $heatingPower->getIsHistorized()) ? " history cursor" : "";

      $inputFlameTemperature = $this->getCmd(null,'inputFlameTemperature');
      $replace['#inputFlameTemperature#'] = (is_object($inputFlameTemperature)) ? $inputFlameTemperature->execCmd() : '';
      $replace['#inputFlameTemperature_id#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getId() : '';
      $replace['#inputFlameTemperature_name#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getName() : '';
      $replace['#inputFlameTemperature_unite#'] = is_object($inputFlameTemperature) ? $inputFlameTemperature->getUnite() : '';
      $replace['#inputFlameTemperature_display#'] = (is_object($inputFlameTemperature) && $inputFlameTemperature->getIsVisible()) ? "" : "display: none;";
      $replace['#inputFlameTemperature_histo#'] = (is_object($inputFlameTemperature) && $inputFlameTemperature->getIsHistorized()) ? " history cursor" : "";

      $local_settargetTemperature = $this->getCmd(null,'local_settargetTemperature');
      $replace['#local_settargetTemperature_id#'] = is_object($local_settargetTemperature) ? $local_settargetTemperature->getId() : '';
      $targetTemperature = $this->getCmd(null,'targetTemperature');
      $options  = array();
      $unite    = is_object($targetTemperature) ? $targetTemperature->getUnite() : '';
      $selected = is_object($targetTemperature) ? $targetTemperature->execCmd() : '';
      for($i=14;$i<29;$i++){
        $options[]=array('value'=>$i, 'label'=>$i.$unite);
      }
      $replace['#targetTemperature#'] = $selected;
      $replace['#targetTemperature_id#'] = is_object($targetTemperature) ? $targetTemperature->getId() : '';
      $replace['#targetTemperature_name#'] = is_object($targetTemperature) ? $targetTemperature->getName() : '';
      $replace['#targetTemperature_options#']=$this->HtmlBuildOptions($options, $selected);
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
      $local_setonOff = $this->getCmd(null,'local_setonOff');
      $replace['#local_setonOff_id#'] = is_object($local_setonOff) ? $local_setonOff->getId() : '';
      $replace['#onOff_name#'] = is_object($onOff) ? $onOff->getName() : '';
      $options = array();
      $selected= is_object($onOff) ? $onOff->execCmd() : '';
      $options[]=array('value'=>0, 'label'=>__('Off',__FILE__));
      $options[]=array('value'=>1, 'label'=>__('On',__FILE__));
      $replace['#onOff_options#']=$this->HtmlBuildOptions($options, $selected);
      $replace['#onOff_display#'] = (is_object($onOff) && $onOff->getIsVisible()) ? "" : "display: none;";

      $parameterRuntimePellets = $this->getCmd(null,'parameterRuntimePellets');
      $replace['#parameterRuntimePellets#'] = (is_object($parameterRuntimePellets)) ? $parameterRuntimePellets->execCmd() : '';
      $replace['#parameterRuntimePellets_id#'] = is_object($parameterRuntimePellets) ? $parameterRuntimePellets->getId() : '';
      $replace['#parameterRuntimePellets_name#'] = is_object($parameterRuntimePellets) ? $parameterRuntimePellets->getName() : '';
      $replace['#parameterRuntimePellets_unite#'] = is_object($parameterRuntimePellets) ? $parameterRuntimePellets->getUnite() : '';
      $replace['#parameterRuntimePellets_display#'] = (is_object($parameterRuntimePellets) && $parameterRuntimePellets->getIsVisible()) ? "" : "display: none;";
      $replace['#parameterRuntimePellets_histo#'] = (is_object($parameterRuntimePellets) && $parameterRuntimePellets->getIsHistorized()) ? " history cursor" : "";

      $parameterRuntimeLogs = $this->getCmd(null,'parameterRuntimeLogs');
      $replace['#parameterRuntimeLogs#'] = (is_object($parameterRuntimeLogs)) ? $parameterRuntimeLogs->execCmd() : '';
      $replace['#parameterRuntimeLogs_id#'] = is_object($parameterRuntimeLogs) ? $parameterRuntimeLogs->getId() : '';
      $replace['#parameterRuntimeLogs_name#'] = is_object($parameterRuntimeLogs) ? $parameterRuntimeLogs->getName() : '';
      $replace['#parameterRuntimeLogs_unite#'] = is_object($parameterRuntimeLogs) ? $parameterRuntimeLogs->getUnite() : '';
      $replace['#parameterRuntimeLogs_display#'] = (is_object($parameterRuntimeLogs) && $parameterRuntimeLogs->getIsVisible()) ? "" : "display: none;";
      $replace['#parameterRuntimeLogs_histo#'] = (is_object($parameterRuntimeLogs) && $parameterRuntimeLogs->getIsHistorized()) ? " history cursor" : "";

      $parameterFeedRateTotal = $this->getCmd(null,'parameterFeedRateTotal');
      $replace['#parameterFeedRateTotal#'] = (is_object($parameterFeedRateTotal)) ? $parameterFeedRateTotal->execCmd() : '';
      $replace['#parameterFeedRateTotal_id#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getId() : '';
      $replace['#parameterFeedRateTotal_name#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getName() : '';
      $replace['#parameterFeedRateTotal_unite#'] = is_object($parameterFeedRateTotal) ? $parameterFeedRateTotal->getUnite() : '';
      $replace['#parameterFeedRateTotal_display#'] = (is_object($parameterFeedRateTotal) && $parameterFeedRateTotal->getIsVisible()) ? "" : "display: none;";
      $replace['#parameterFeedRateTotal_histo#'] = (is_object($parameterFeedRateTotal) && $parameterFeedRateTotal->getIsHistorized()) ? " history cursor" : "";

      $parameterFeedRateService = $this->getCmd(null,'parameterFeedRateService');
      $replace['#parameterFeedRateService#'] = (is_object($parameterFeedRateService)) ? $parameterFeedRateService->execCmd() : '';
      $replace['#parameterFeedRateService_id#'] = is_object($parameterFeedRateService) ? $parameterFeedRateService->getId() : '';
      $replace['#parameterFeedRateService_name#'] = is_object($parameterFeedRateService) ? $parameterFeedRateService->getName() : '';
      $replace['#parameterFeedRateService_unite#'] = is_object($parameterFeedRateService) ? $parameterFeedRateService->getUnite() : '';
      $replace['#parameterFeedRateService_display#'] = (is_object($parameterFeedRateService) && $parameterFeedRateService->getIsVisible()) ? "" : "display: none;";
      $replace['#parameterFeedRateService_histo#'] = (is_object($parameterFeedRateService) && $parameterFeedRateService->getIsHistorized()) ? " history cursor" : "";

      $local_downtime = $this->getCmd(null,'local_downtime');
      $replace['#local_downtime#'] = (is_object($local_downtime)) ? $local_downtime->execCmd() : '';
      $replace['#local_downtime_id#'] = is_object($local_downtime) ? $local_downtime->getId() : '';
      $replace['#local_downtime_name#'] = is_object($local_downtime) ? $local_downtime->getName() : '';
      $lastSeenMinutes = $this->getCmd(null,'lastSeenMinutes');
      $lastSeenMinutesValue=(is_object($lastSeenMinutes)) ? $lastSeenMinutes->execCmd() : 0;
      if($lastSeenMinutesValue<2){
        $replace['#local_downtime_display#'] = "display: none;";
      }else{
        $replace['#local_downtime_display#'] = (is_object($local_downtime) && $local_downtime->getIsVisible()) ? "" : "display: none;";
      }

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

      $local_setfullTank = $this->getCmd(null,'local_setfullTank');
      $replace['#local_setfullTank_id#'] = is_object($local_setfullTank) ? $local_setfullTank->getId() : '';
      $replace['#local_setfullTank_name#'] = is_object($local_setfullTank) ? $local_setfullTank->getName() : '';
      if($this->getConfiguration('tankcapacity')>0){
        $replace['#local_setfullTank_display#'] = (is_object($local_setfullTank) && $local_setfullTank->getIsVisible()) ? "" : "display: none;";
      }else{
        $replace['#local_setfullTank_display#'] = "display: none;";
      }
      $local_tankLevel = $this->getCmd(null,'local_tankLevel');
      $replace['#local_tankLevel#'] = (is_object($local_tankLevel)) ? $local_tankLevel->execCmd() : '';
      $replace['#local_tankLevel_id#'] = is_object($local_tankLevel) ? $local_tankLevel->getId() : '';
      $replace['#local_tankLevel_name#'] = is_object($local_tankLevel) ? $local_tankLevel->getName() : '';
      $replace['#local_tankLevel_unite#'] = is_object($local_tankLevel) ? $local_tankLevel->getUnite() : '';
      if($this->getConfiguration('tankcapacity')>0){
        $replace['#local_tankLevel_display#'] = (is_object($local_tankLevel) && $local_tankLevel->getIsVisible()) ? "" : "display: none;";
      }else{
        $replace['#local_setfullTank_display#'] = "display: none;";
      }
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
    public static $_widgetPossibility = array('custom' => true);

    public function execute($_options = array()) {
      log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' LogicalId: '. $this->getLogicalId());
      log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' options: '. json_encode($_options));

      if ( $this->GetType = "action" ){
        log::add('rikaha', 'debug',   $this->getConfiguration('actionCmd'));
        switch ($this->getConfiguration('actionCmd')) {
          case 'getInfo':
            $this->getEqLogic()->getInfo();
            break;
          case 'settargetTemperature':
          case 'setoperatingMode':
          case 'setonOff':
          case 'setheatingPower':
            if($this->getEqLogic()->controlStove($this->getConfiguration('stovekey'), $_options)===true){
              $this->getEqLogic()->refreshWidget();
            }
            //$this->getEqLogic()->getInfo();
            //$this->getEqLogic()->setStove($this->getConfiguration('stovekey'), $_options);
            //$this->getEqLogic()->refreshWidget();
            break;
          case 'setfullTank':
            $this->getEqLogic()->setfullTank();
            $this->getEqLogic()->refreshWidget();
            break;
          default:
            throw new Exception(__('Commande non implémentée actuellement', __FILE__));
        }
      }else{
        throw new Exception(__('Commande non implémentée actuellement', __FILE__));
      }

      return true;
    }
}
