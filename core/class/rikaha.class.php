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
        $rikaha->getInfo();
        //$rikaha->calcTankLevel();
        // Dashboard
        $mc = cache::byKey('rikahaWidgetdashboard' . $rikaha->getId());
        $mc->remove();
        $rikaha->toHtml('dashboard');
        $rikaha->refreshWidget();
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

    public static function cron10() {
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
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //stoveID
        'stoveID'=>array(
          'name'=>__('ID du poêle', __FILE__),
          'id'=>'stoveID',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //lastSeenMinutes
        'lastSeenMinutes'=>array(
          'name'=>__('Hors ligne', __FILE__),
          'id'=>'lastSeenMinutes',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //lastConfirmedRevision
        'lastConfirmedRevision'=>array(
          'name'=>__('lastConfirmedRevision', __FILE__),
          'id'=>'lastConfirmedRevision',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //onOff
        'onOff'=>array(
          'name'=>__('On/Off', __FILE__),
          'id'=>'onOff',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //operatingMode
        'operatingMode'=>array(
          'name'=>__('Mode', __FILE__),
          'id'=>'operatingMode',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingPower
        'heatingPower'=>array(
          'name'=>__('Puissance', __FILE__),
          'id'=>'heatingPower',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'%',
          'order'=>99
        ),
        //targetTemperature
        'targetTemperature'=>array(
          'name'=>__('Temp. de consigne', __FILE__),
          'id'=>'targetTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //ecoMode
        'ecoMode'=>array(
          'name'=>__('Mode éco', __FILE__),
          'id'=>'ecoMode',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeMon1
        'heatingTimeMon1'=>array(
          'name'=>__('heatingTimeMon1', __FILE__),
          'id'=>'heatingTimeMon1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeMon2
        'heatingTimeMon2'=>array(
          'name'=>__('heatingTimeMon2', __FILE__),
          'id'=>'heatingTimeMon2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeTue1
        'heatingTimeTue1'=>array(
          'name'=>__('heatingTimeTue1', __FILE__),
          'id'=>'heatingTimeTue1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeTue2
        'heatingTimeTue2'=>array(
          'name'=>__('heatingTimeTue2', __FILE__),
          'id'=>'heatingTimeTue2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeWed1
        'heatingTimeWed1'=>array(
          'name'=>__('heatingTimeWed1', __FILE__),
          'id'=>'heatingTimeWed1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeWed2
        'heatingTimeWed2'=>array(
          'name'=>__('heatingTimeWed2', __FILE__),
          'id'=>'heatingTimeWed2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeThu1
        'heatingTimeThu1'=>array(
          'name'=>__('heatingTimeThu1', __FILE__),
          'id'=>'heatingTimeThu1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeThu2
        'heatingTimeThu2'=>array(
          'name'=>__('heatingTimeThu2', __FILE__),
          'id'=>'heatingTimeThu2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeFri1
        'heatingTimeFri1'=>array(
          'name'=>__('heatingTimeFri1', __FILE__),
          'id'=>'heatingTimeFri1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeFri2
        'heatingTimeFri2'=>array(
          'name'=>__('heatingTimeFri2', __FILE__),
          'id'=>'heatingTimeFri2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeSat1
        'heatingTimeSat1'=>array(
          'name'=>__('heatingTimeSat1', __FILE__),
          'id'=>'heatingTimeSat1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeSat2
        'heatingTimeSat2'=>array(
          'name'=>__('heatingTimeSat2', __FILE__),
          'id'=>'heatingTimeSat2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeSun1
        'heatingTimeSun1'=>array(
          'name'=>__('heatingTimeSun1', __FILE__),
          'id'=>'heatingTimeSun1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimeSun2
        'heatingTimeSun2'=>array(
          'name'=>__('heatingTimeSun2', __FILE__),
          'id'=>'heatingTimeSun2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //heatingTimesActiveForComfort
        'heatingTimesActiveForComfort'=>array(
          'name'=>__('heatingTimesActiveForComfort', __FILE__),
          'id'=>'heatingTimesActiveForComfort',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //setBackTemperature
        'setBackTemperature'=>array(
          'name'=>__('setBackTemperature', __FILE__),
          'id'=>'setBackTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //convectionFan1Active
        'convectionFan1Active'=>array(
          'name'=>__('Etat Convection MultiAir 1', __FILE__),
          'id'=>'convectionFan1Active',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //convectionFan1Level
        'convectionFan1Level'=>array(
          'name'=>__('Degré de convection MultiAir 1', __FILE__),
          'id'=>'convectionFan1Level',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //convectionFan1Area
        'convectionFan1Area'=>array(
          'name'=>__('Étendue de convection MultiAir 1', __FILE__),
          'id'=>'convectionFan1Area',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'%',
          'order'=>99
        ),
        //convectionFan2Active
        'convectionFan2Active'=>array(
          'name'=>__('Etat Convection MultiAir 2', __FILE__),
          'id'=>'convectionFan2Active',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'%',
          'order'=>99
        ),
        //convectionFan2Level
        'convectionFan2Level'=>array(
          'name'=>__('Degré de convection MultiAir 2', __FILE__),
          'id'=>'convectionFan2Level',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //convectionFan2Area
        'convectionFan2Area'=>array(
          'name'=>__('Étendue de convection MultiAir 2', __FILE__),
          'id'=>'convectionFan2Area',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //frostProtectionActive
        'frostProtectionActive'=>array(
          'name'=>__('Mode hors gel', __FILE__),
          'id'=>'frostProtectionActive',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //frostProtectionTemperature
        'frostProtectionTemperature'=>array(
          'name'=>__('Temp. hors gel', __FILE__),
          'id'=>'frostProtectionTemperature',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //temperatureOffset
        'temperatureOffset'=>array(
          'name'=>__('temperatureOffset', __FILE__),
          'id'=>'temperatureOffset',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //RoomPowerRequest
        'RoomPowerRequest'=>array(
          'name'=>__('RoomPowerRequest', __FILE__),
          'id'=>'RoomPowerRequest',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderWeekday
        'calenderWeekday'=>array(
          'name'=>__('calenderWeekday', __FILE__),
          'id'=>'calenderWeekday',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderDay
        'calenderDay'=>array(
          'name'=>__('calenderDay', __FILE__),
          'id'=>'calenderDay',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderMonth
        'calenderMonth'=>array(
          'name'=>__('calenderMonth', __FILE__),
          'id'=>'calenderMonth',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderYear
        'calenderYear'=>array(
          'name'=>__('calenderYear', __FILE__),
          'id'=>'calenderYear',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderHour
        'calenderHour'=>array(
          'name'=>__('calenderHour', __FILE__),
          'id'=>'calenderHour',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //calenderMinute
        'calenderMinute'=>array(
          'name'=>__('calenderMinute', __FILE__),
          'id'=>'calenderMinute',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        /*
        //debug0
        'debug0'=>array(
          'name'=>__('debug0', __FILE__),
          'id'=>'debug0',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //debug1
        'debug1'=>array(
          'name'=>__('debug1', __FILE__),
          'id'=>'debug1',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //debug2
        'debug2'=>array(
          'name'=>__('debug2', __FILE__),
          'id'=>'debug2',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //debug3
        'debug3'=>array(
          'name'=>__('debug3', __FILE__),
          'id'=>'debug3',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //debug4
        'debug4'=>array(
          'name'=>__('debug4', __FILE__),
          'id'=>'debug4',
          'parent'=>'controls',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        */
        //sensors
        //inputRoomTemperature
        'inputRoomTemperature'=>array(
          'name'=>__('Temp. sonde déportée', __FILE__),
          'id'=>'inputRoomTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //inputFlameTemperature
        'inputFlameTemperature'=>array(
          'name'=>__('Temp. de flamme', __FILE__),
          'id'=>'inputFlameTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //statusError
        'statusError'=>array(
          'name'=>__('Erreur', __FILE__),
          'id'=>'statusError',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //statusWarning
        'statusWarning'=>array(
          'name'=>__('Warning', __FILE__),
          'id'=>'statusWarning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //statusService
        'statusService'=>array(
          'name'=>__('statusService', __FILE__),
          'id'=>'statusService',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputDischargeMotor
        'outputDischargeMotor'=>array(
          'name'=>__('outputDischargeMotor', __FILE__),
          'id'=>'outputDischargeMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputDischargeCurrent
        'outputDischargeCurrent'=>array(
          'name'=>__('outputDischargeCurrent', __FILE__),
          'id'=>'outputDischargeCurrent',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputIDFan
        'outputIDFan'=>array(
          'name'=>__('outputIDFan', __FILE__),
          'id'=>'outputIDFan',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputIDFanTarget
        'outputIDFanTarget'=>array(
          'name'=>__('outputIDFanTarget', __FILE__),
          'id'=>'outputIDFanTarget',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputInsertionMotor
        'outputInsertionMotor'=>array(
          'name'=>__('outputInsertionMotor', __FILE__),
          'id'=>'outputInsertionMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputInsertionCurrent
        'outputInsertionCurrent'=>array(
          'name'=>__('outputInsertionCurrent', __FILE__),
          'id'=>'outputInsertionCurrent',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputAirFlaps
        'outputAirFlaps'=>array(
          'name'=>__('outputAirFlaps', __FILE__),
          'id'=>'outputAirFlaps',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputAirFlapsTargetPosition
        'outputAirFlapsTargetPosition'=>array(
          'name'=>__('outputAirFlapsTargetPosition', __FILE__),
          'id'=>'outputAirFlapsTargetPosition',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputBurnBackFlapMagnet
        'outputBurnBackFlapMagnet'=>array(
          'name'=>__('outputBurnBackFlapMagnet', __FILE__),
          'id'=>'outputBurnBackFlapMagnet',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputGridMotor
        'outputGridMotor'=>array(
          'name'=>__('outputGridMotor', __FILE__),
          'id'=>'outputGridMotor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //outputIgnition
        'outputIgnition'=>array(
          'name'=>__('outputIgnition', __FILE__),
          'id'=>'outputIgnition',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputSafetyTemperatureLimiter
        'inputSafetyTemperatureLimiter'=>array(
          'name'=>__('inputSafetyTemperatureLimiter', __FILE__),
          'id'=>'inputSafetyTemperatureLimiter',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputUpperTemperatureLimiter
        'inputUpperTemperatureLimiter'=>array(
          'name'=>__('inputUpperTemperatureLimiter', __FILE__),
          'id'=>'inputUpperTemperatureLimiter',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputPressureSwitch
        'inputPressureSwitch'=>array(
          'name'=>__('inputPressureSwitch', __FILE__),
          'id'=>'inputPressureSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputPressureSensor
        'inputPressureSensor'=>array(
          'name'=>__('inputPressureSensor', __FILE__),
          'id'=>'inputPressureSensor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputGridContact
        'inputGridContact'=>array(
          'name'=>__('inputGridContact', __FILE__),
          'id'=>'inputGridContact',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputDoor
        'inputDoor'=>array(
          'name'=>__('inputDoor', __FILE__),
          'id'=>'inputDoor',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputCover
        'inputCover'=>array(
          'name'=>__('inputCover', __FILE__),
          'id'=>'inputCover',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputExternalRequest
        'inputExternalRequest'=>array(
          'name'=>__('inputExternalRequest', __FILE__),
          'id'=>'inputExternalRequest',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputBurnBackFlapSwitch
        'inputBurnBackFlapSwitch'=>array(
          'name'=>__('inputBurnBackFlapSwitch', __FILE__),
          'id'=>'inputBurnBackFlapSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputFlueGasFlapSwitch
        'inputFlueGasFlapSwitch'=>array(
          'name'=>__('inputFlueGasFlapSwitch', __FILE__),
          'id'=>'inputFlueGasFlapSwitch',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputBoardTemperature
        'inputBoardTemperature'=>array(
          'name'=>__('inputBoardTemperature', __FILE__),
          'id'=>'inputBoardTemperature',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'°C',
          'order'=>99
        ),
        //inputZeroCrossingDelay
        'inputZeroCrossingDelay'=>array(
          'name'=>__('inputZeroCrossingDelay', __FILE__),
          'id'=>'inputZeroCrossingDelay',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputCurrentStage
        'inputCurrentStage'=>array(
          'name'=>__('inputCurrentStage', __FILE__),
          'id'=>'inputCurrentStage',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputTargetStagePID
        'inputTargetStagePID'=>array(
          'name'=>__('inputTargetStagePID', __FILE__),
          'id'=>'inputCurrentStage',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //inputCurrentStagePID
        'inputCurrentStagePID'=>array(
          'name'=>__('inputCurrentStagePID', __FILE__),
          'id'=>'inputCurrentStagePID',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //statusMainState
        'statusMainState'=>array(
          'name'=>__('statusMainState', __FILE__),
          'id'=>'statusMainState',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //statusSubState
        'statusSubState'=>array(
          'name'=>__('statusSubState', __FILE__),
          'id'=>'statusSubState',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterEcoModePossible
        'parameterEcoModePossible'=>array(
          'name'=>__('parameterEcoModePossible', __FILE__),
          'id'=>'parameterEcoModePossible',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterFabricationNumber
        'parameterFabricationNumber'=>array(
          'name'=>__('parameterFabricationNumber', __FILE__),
          'id'=>'parameterFabricationNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterStoveTypeNumber
        'parameterFabricationNumber'=>array(
          'name'=>__('parameterFabricationNumber', __FILE__),
          'id'=>'parameterFabricationNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterSubTypeNumber
        'parameterSubTypeNumber'=>array(
          'name'=>__('parameterSubTypeNumber', __FILE__),
          'id'=>'parameterSubTypeNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterLanguageNumber
        'parameterLanguageNumber'=>array(
          'name'=>__('parameterLanguageNumber', __FILE__),
          'id'=>'parameterLanguageNumber',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionMainBoard
        'parameterVersionMainBoard'=>array(
          'name'=>__('Version firmeware carte mère', __FILE__),
          'id'=>'parameterVersionMainBoard',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionTFT
        'parameterVersionTFT'=>array(
          'name'=>__('Version firmeware écran', __FILE__),
          'id'=>'parameterVersionTFT',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionMainBoardBootLoader
        'parameterVersionMainBoardBootLoader'=>array(
          'name'=>__('parameterVersionMainBoardBootLoader', __FILE__),
          'id'=>'parameterVersionMainBoardBootLoader',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionTFTBootLoader
        'parameterVersionTFTBootLoader'=>array(
          'name'=>__('parameterVersionTFTBootLoader', __FILE__),
          'id'=>'parameterVersionTFTBootLoader',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionMainBoardSub
        'parameterVersionMainBoardSub'=>array(
          'name'=>__('parameterVersionMainBoardSub', __FILE__),
          'id'=>'parameterVersionMainBoardSub',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterVersionTFTSub
        'parameterVersionTFTSub'=>array(
          'name'=>__('parameterVersionTFTSub', __FILE__),
          'id'=>'parameterVersionTFTSub',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterRuntimePellets
        'parameterRuntimePellets'=>array(
          'name'=>__('Utilisation mode pellet', __FILE__),
          'id'=>'parameterRuntimePellets',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'h',
          'order'=>99
        ),
        //parameterRuntimeLogs
        'parameterRuntimeLogs'=>array(
          'name'=>__('Utilisation mode bois', __FILE__),
          'id'=>'parameterRuntimeLogs',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'h',
          'order'=>99
        ),
        //parameterFeedRateTotal
        'parameterFeedRateTotal'=>array(
          'name'=>__('Conso. totale de pellet', __FILE__),
          'id'=>'parameterFeedRateTotal',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>1,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'kg',
          'order'=>99
        ),
        //parameterFeedRateService
        'parameterFeedRateService'=>array(
          'name'=>__('Conso. avant entretien', __FILE__),
          'id'=>'parameterFeedRateService',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'kg',
          'order'=>99
        ),
        //parameterServiceCountdownKg
        'parameterServiceCountdownKg'=>array(
          'name'=>__('parameterServiceCountdownKg', __FILE__),
          'id'=>'parameterServiceCountdownKg',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterServiceCountdownTime
        'parameterServiceCountdownTime'=>array(
          'name'=>__('parameterServiceCountdownTime', __FILE__),
          'id'=>'parameterServiceCountdownTime',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterIgnitionCount
        'parameterIgnitionCount'=>array(
          'name'=>__('parameterIgnitionCount', __FILE__),
          'id'=>'parameterIgnitionCount',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterOnOffCycleCount
        'parameterOnOffCycleCount'=>array(
          'name'=>__('parameterOnOffCycleCount', __FILE__),
          'id'=>'parameterOnOffCycleCount',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterFlameSensorOffset
        'parameterFlameSensorOffset'=>array(
          'name'=>__('parameterFlameSensorOffset', __FILE__),
          'id'=>'parameterFlameSensorOffset',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterPressureSensorOffset
        'parameterPressureSensorOffset'=>array(
          'name'=>__('parameterPressureSensorOffset', __FILE__),
          'id'=>'parameterPressureSensorOffset',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        /*
        //parameterErrorCount0
        'parameterErrorCount0'=>array(
          'name'=>__('parameterErrorCount0', __FILE__),
          'id'=>'parameterErrorCount0',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount1
        'parameterErrorCount1'=>array(
          'name'=>__('parameterErrorCount1', __FILE__),
          'id'=>'parameterErrorCount1',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount2
        'parameterErrorCount2'=>array(
          'name'=>__('parameterErrorCount2', __FILE__),
          'id'=>'parameterErrorCount2',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount3
        'parameterErrorCount3'=>array(
          'name'=>__('parameterErrorCount3', __FILE__),
          'id'=>'parameterErrorCount3',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount4
        'parameterErrorCount4'=>array(
          'name'=>__('parameterErrorCount4', __FILE__),
          'id'=>'parameterErrorCount4',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount5
        'parameterErrorCount5'=>array(
          'name'=>__('parameterErrorCount5', __FILE__),
          'id'=>'parameterErrorCount5',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount6
        'parameterErrorCount6'=>array(
          'name'=>__('parameterErrorCount6', __FILE__),
          'id'=>'parameterErrorCount6',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount7
        'parameterErrorCount7'=>array(
          'name'=>__('parameterErrorCount7', __FILE__),
          'id'=>'parameterErrorCount7',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount8
        'parameterErrorCount8'=>array(
          'name'=>__('parameterErrorCount8', __FILE__),
          'id'=>'parameterErrorCount8',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount9
        'parameterErrorCount9'=>array(
          'name'=>__('parameterErrorCount9', __FILE__),
          'id'=>'parameterErrorCount9',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount10
        'parameterErrorCount10'=>array(
          'name'=>__('parameterErrorCount10', __FILE__),
          'id'=>'parameterErrorCount10',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount11
        'parameterErrorCount11'=>array(
          'name'=>__('parameterErrorCount11', __FILE__),
          'id'=>'parameterErrorCount11',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount12
        'parameterErrorCount12'=>array(
          'name'=>__('parameterErrorCount12', __FILE__),
          'id'=>'parameterErrorCount12',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount13
        'parameterErrorCount13'=>array(
          'name'=>__('parameterErrorCount13', __FILE__),
          'id'=>'parameterErrorCount13',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount14
        'parameterErrorCount14'=>array(
          'name'=>__('parameterErrorCount14', __FILE__),
          'id'=>'parameterErrorCount14',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount15
        'parameterErrorCount15'=>array(
          'name'=>__('parameterErrorCount15', __FILE__),
          'id'=>'parameterErrorCount15',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount16
        'parameterErrorCount16'=>array(
          'name'=>__('parameterErrorCount16', __FILE__),
          'id'=>'parameterErrorCount16',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount17
        'parameterErrorCount17'=>array(
          'name'=>__('parameterErrorCount17', __FILE__),
          'id'=>'parameterErrorCount17',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount18
        'parameterErrorCount18'=>array(
          'name'=>__('parameterErrorCount18', __FILE__),
          'id'=>'parameterErrorCount18',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterErrorCount19
        'parameterErrorCount19'=>array(
          'name'=>__('parameterErrorCount19', __FILE__),
          'id'=>'parameterErrorCount19',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        */
        //statusHeatingTimesNotProgrammed
        'statusHeatingTimesNotProgrammed'=>array(
          'name'=>__('statusHeatingTimesNotProgrammed', __FILE__),
          'id'=>'statusHeatingTimesNotProgrammed',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //statusFrostStarted
        'statusFrostStarted'=>array(
          'name'=>__('statusFrostStarted', __FILE__),
          'id'=>'statusFrostStarted',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterSpiralMotorsTuning
        'parameterSpiralMotorsTuning'=>array(
          'name'=>__('parameterSpiralMotorsTuning', __FILE__),
          'id'=>'parameterSpiralMotorsTuning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterIDFanTuning
        'parameterIDFanTuning'=>array(
          'name'=>__('parameterIDFanTuning', __FILE__),
          'id'=>'parameterIDFanTuning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterCleanIntervalBig
        'parameterCleanIntervalBig'=>array(
          'name'=>__('parameterCleanIntervalBig', __FILE__),
          'id'=>'parameterCleanIntervalBig',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterKgTillCleaning
        'parameterKgTillCleaning'=>array(
          'name'=>__('parameterKgTillCleaning', __FILE__),
          'id'=>'parameterKgTillCleaning',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        /*
        //parameterDebug0
        'parameterDebug0'=>array(
          'name'=>__('parameterDebug0', __FILE__),
          'id'=>'parameterDebug0',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterDebug1
        'parameterDebug1'=>array(
          'name'=>__('parameterDebug1', __FILE__),
          'id'=>'parameterDebug1',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterDebug2
        'parameterDebug2'=>array(
          'name'=>__('parameterDebug2', __FILE__),
          'id'=>'parameterDebug2',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterDebug3
        'parameterDebug3'=>array(
          'name'=>__('parameterDebug3', __FILE__),
          'id'=>'parameterDebug3',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //parameterDebug4
        'parameterDebug4'=>array(
          'name'=>__('parameterDebug4', __FILE__),
          'id'=>'parameterDebug4',
          'parent'=>'sensors',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        */
        //stoveType
        'stoveType'=>array(
          'name'=>__('Type', __FILE__),
          'id'=>'stoveType',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //multiAir2
        'multiAir2'=>array(
          'name'=>__('multiAir2', __FILE__),
          'id'=>'multiAir2',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //insertionMotor
        'insertionMotor'=>array(
          'name'=>__('insertionMotor', __FILE__),
          'id'=>'insertionMotor',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //airFlaps
        'airFlaps'=>array(
          'name'=>__('airFlaps', __FILE__),
          'id'=>'airFlaps',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //logRuntime
        'logRuntime'=>array(
          'name'=>__('logRuntime', __FILE__),
          'id'=>'logRuntime',
          'parent'=>'stoveFeatures',
          'type'=>'info',
          'subtype'=>'binary',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //local_tankLevel
        'local_tankLevel'=>array(
          'name'=>__('Niveau du réservoir à pellet', __FILE__),
          'id'=>'local_tankLevel',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'numeric',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'kg',
          'order'=>99
        ),
        //local_statusCalculate
        'local_statusCalculate'=>array(
          'name'=>__('Statut', __FILE__),
          'id'=>'local_statusCalculate',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //
        'local_lastupdate'=>array(
          'name'=>__('Dernière maj', __FILE__),
          'id'=>'local_lastupdate',
          'parent'=>'0',
          'type'=>'info',
          'subtype'=>'string',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(),
          'unite'=>'',
          'order'=>99
        ),
        //Refesh action
        'local_refresh'=>array(
          'name'=>__('Rafraichir', __FILE__),
          'id'=>'local_refresh',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'other',
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'getInfo')),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'settargetTemperature'),array('k1'=>'stovekey', 'k2'=>'targetTemperature')),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setoperatingMode'),array('k1'=>'stovekey', 'k2'=>'operatingMode')),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setonOff'),array('k1'=>'stovekey', 'k2'=>'onOff')),
          'unite'=>'',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setheatingPower'),array('k1'=>'stovekey', 'k2'=>'heatingPower')),
          'unite'=>'%',
          'order'=>99
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
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setfullTank'),array('k1'=>'stovekey', 'k2'=>'tankLevel')),
          'unite'=>'',
          'order'=>99
        ),
        //Set convectionFan1Active
        'local_setconvectionFan1Active'=>array(
          'name'=>__("Modif état Convection MultiAir 1", __FILE__),
          'id'=>'local_setconvectionFan1Active',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('0=OFF, 1=ON', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan1Active'),array('k1'=>'stovekey', 'k2'=>'convectionFan1Active')),
          'unite'=>'',
          'order'=>99
        ),
        //Set convectionFan1Area
        'local_setconvectionFan1Area'=>array(
          'name'=>__("Modif étendue de convection MultiAir 1", __FILE__),
          'id'=>'local_setconvectionFan1Area',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('De -30 à +30 % pas de 5', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan1Area'),array('k1'=>'stovekey', 'k2'=>'convectionFan1Area')),
          'unite'=>'%',
          'order'=>99
        ),
        //Set convectionFan1Level
        'local_setconvectionFan1Level'=>array(
          'name'=>__("Modif degré de convection MultiAir 1", __FILE__),
          'id'=>'local_setconvectionFan1Level',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('De 0-5', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan1Level'),array('k1'=>'stovekey', 'k2'=>'convectionFan1Level')),
          'unite'=>'',
          'order'=>99
        ),
        //Set convectionFan2Active
        'local_setconvectionFan2Active'=>array(
          'name'=>__("Modif état Convection MultiAir 2", __FILE__),
          'id'=>'local_setconvectionFan2Active',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('0=OFF, 1=ON', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan2Active'),array('k1'=>'stovekey', 'k2'=>'convectionFan2Active')),
          'unite'=>'',
          'order'=>99
        ),
        //Set convectionFan2Area
        'local_setconvectionFan2Area'=>array(
          'name'=>__("Modif étendue de convection MultiAir 2", __FILE__),
          'id'=>'local_setconvectionFan2Area',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('De -30 à +30 % pas de 5', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan2Area'),array('k1'=>'stovekey', 'k2'=>'convectionFan2Area')),
          'unite'=>'%',
          'order'=>99
        ),
        //Set convectionFan2Level
        'local_setconvectionFan2Level'=>array(
          'name'=>__("Modif degré de convection MultiAir 2", __FILE__),
          'id'=>'local_setconvectionFan2Level',
          'parent'=>'0',
          'type'=>'action',
          'subtype'=>'message',
          'message_placeholder'=> __('De 0-5', __FILE__),
          'title_disable'=> 1,
          'historized'=>0,
          'visible'=>0,
          'configuration'=>array(array('k1'=>'actionCmd', 'k2'=>'setconvectionFan2Level'),array('k1'=>'stovekey', 'k2'=>'convectionFan2Level')),
          'unite'=>'',
          'order'=>99
        )
      );
    }

    private function defStoveTemplate($type=NULL){
      $stoveTemplate=array(
        'standard'=>array(
          'local_statusCalculate'        => array('visible'=>1, 'historized'=>0, 'order'=>1, 'icon'=>'<i class="fas fa-fire"></i>'),
          'local_setonOff'               => array('visible'=>1, 'historized'=>0, 'order'=>2, 'icon'=>'<i class="icon jeedom-off"></i>'),
          'local_settargetTemperature'   => array('visible'=>1, 'historized'=>0, 'order'=>3, 'icon'=>'<i class="icon jeedom-thermo-froid"></i>'),
          'local_setoperatingMode'       => array('visible'=>1, 'historized'=>0, 'order'=>4, 'icon'=>'<i class="icon jeedomapp-preset2"></i>'),
          'local_setheatingPower'        => array('visible'=>1, 'historized'=>0, 'order'=>5, 'icon'=>'<i class="fas fa-tachometer-alt"></i>'),
          'parameterRuntimePellets'      => array('visible'=>1, 'historized'=>1, 'order'=>6, 'icon'=>'<i class="fas fa-clock-o"></i>'),
          'parameterFeedRateTotal'       => array('visible'=>1, 'historized'=>1, 'order'=>7, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'parameterFeedRateService'     => array('visible'=>1, 'historized'=>1, 'order'=>8, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'frostProtectionTemperature'   => array('visible'=>1, 'historized'=>0, 'order'=>9, 'icon'=>'<i class="icon nature-snowflake"></i>'),
          'parameterVersionMainBoard'    => array('visible'=>1, 'historized'=>0, 'order'=>10, 'icon'=>'<i class="icon techno-pc"></i>')
        ),
        'domo'=>array(
          'local_statusCalculate'         => array('visible'=>1, 'historized'=>0, 'order'=>1, 'icon'=>'<i class="fas fa-fire"></i>'),
          'inputRoomTemperature'          => array('visible'=>1, 'historized'=>1, 'order'=>2, 'icon'=>'<i class="icon jeedom-thermo-moyen"></i>'),
          'local_setonOff'                => array('visible'=>1, 'historized'=>0, 'order'=>3, 'icon'=>'<i class="icon jeedom-off"></i>'),
          'local_settargetTemperature'    => array('visible'=>1, 'historized'=>0, 'order'=>4, 'icon'=>'<i class="icon jeedom-thermo-froid"></i>'),
          'local_setoperatingMode'        => array('visible'=>1, 'historized'=>0, 'order'=>5, 'icon'=>'<i class="icon jeedomapp-preset2"></i>'),
          'local_setheatingPower'         => array('visible'=>1, 'historized'=>0, 'order'=>6, 'icon'=>'<i class="fas fa-tachometer-alt"></i>'),
          'local_setconvectionFan1Active' => array('visible'=>1, 'historized'=>0, 'order'=>7, 'icon'=>'<i class="icon jeedomapp-reload"></i>'),
          'local_setconvectionFan1Area'   => array('visible'=>1, 'historized'=>0, 'order'=>8, 'icon'=>'<i class="icon techno-ventilation"></i>'),
          'local_setconvectionFan1Level'  => array('visible'=>1, 'historized'=>0, 'order'=>9, 'icon'=>'<i class="icon jeedom2-fdp1-signal4"></i>'),
          'parameterRuntimePellets'       => array('visible'=>1, 'historized'=>1, 'order'=>10, 'icon'=>'<i class="fas fa-clock-o"></i>'),
          'parameterFeedRateTotal'        => array('visible'=>1, 'historized'=>1, 'order'=>11, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'parameterFeedRateService'      => array('visible'=>1, 'historized'=>1, 'order'=>12, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'frostProtectionTemperature'    => array('visible'=>1, 'historized'=>0, 'order'=>13, 'icon'=>'<i class="icon nature-snowflake"></i>'),
          'parameterVersionMainBoard'     => array('visible'=>1, 'historized'=>0, 'order'=>14, 'icon'=>'<i class="icon techno-pc"></i>')
        ),
        'induo'=>array(
          'local_statusCalculate'         => array('visible'=>1, 'historized'=>0, 'order'=>1, 'icon'=>'<i class="fas fa-fire"></i>'),
          'ecoMode'                       => array('visible'=>1, 'historized'=>1, 'order'=>2, 'icon'=>'<i class="icon divers-triangular42"></i>'),
          'inputRoomTemperature'          => array('visible'=>1, 'historized'=>1, 'order'=>3, 'icon'=>'<i class="icon jeedom-thermo-moyen"></i>'),
          'local_settargetTemperature'    => array('visible'=>1, 'historized'=>0, 'order'=>4, 'icon'=>'<i class="icon jeedom-thermo-froid"></i>'),
          'local_setonOff'                => array('visible'=>1, 'historized'=>0, 'order'=>5, 'icon'=>'<i class="icon jeedom-off"></i>'),
          'local_setoperatingMode'        => array('visible'=>1, 'historized'=>0, 'order'=>6, 'icon'=>'<i class="icon jeedomapp-preset2"></i>'),
          'local_setfullTank'             => array('visible'=>1, 'historized'=>0, 'order'=>7, 'icon'=>'<i class="icon divers-fuel4"></i>'),
          'local_setheatingPower'         => array('visible'=>1, 'historized'=>0, 'order'=>8, 'icon'=>'<i class="fas fa-tachometer-alt"></i>'),
          'local_tankLevel'               => array('visible'=>1, 'historized'=>1, 'order'=>9, 'icon'=>'<i class="icon jeedom2-fdp1-signal02"></i>'),
          'parameterRuntimeLogs'          => array('visible'=>1, 'historized'=>1, 'order'=>10, 'icon'=>'<i class="fas fa-clock-o"></i>'),
          'parameterRuntimePellets'       => array('visible'=>1, 'historized'=>1, 'order'=>11, 'icon'=>'<i class="fas fa-clock-o"></i>'),
          'parameterFeedRateService'      => array('visible'=>1, 'historized'=>1, 'order'=>12, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'parameterFeedRateTotal'        => array('visible'=>1, 'historized'=>1, 'order'=>13, 'icon'=>'<i class="icon divers-weight11"></i>'),
          'parameterVersionMainBoard'     => array('visible'=>1, 'historized'=>0, 'order'=>14, 'icon'=>'<i class="icon techno-pc"></i>'),
          'lastSeenMinutes'               => array('visible'=>1, 'historized'=>0, 'order'=>15, 'icon'=>'<i class="icon divers-vlc1"></i>'),
          'frostProtectionTemperature'    => array('visible'=>1, 'historized'=>0, 'order'=>16, 'icon'=>'<i class="icon nature-snowflake"></i>')
        )
      );

      if(is_null($type)===true){
        return $stoveTemplate ;
      }else{
        if(isset($stoveTemplate[$type])===false){
          $type='standard';
        }
        return $stoveTemplate[$type];
      }
    }

    private function setStoveTemplate($type){
      $stoveTemplate=$this->defStoveTemplate($type);

      foreach ($stoveTemplate as $key => $value) {
        $rikahaCmd = $this->getCmd(null, $key);
        if (is_object($rikahaCmd)){
          $rikahaCmd->setIsHistorized($value['historized']);
          $rikahaCmd->setIsVisible($value['visible']);
          $rikahaCmd->setOrder($value['order']);
          $rikahaCmd->setDisplay('icon', $value['icon']);
          $rikahaCmd->save();
        }
      }
      return true;
    }

    public function getStoveTemplateList(){
      $stoveTemplate=rikaha::defStoveTemplate();
      $stoveTemplateList=array_keys($stoveTemplate);
      return $stoveTemplateList;
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
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
      curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
      curl_setopt($ch, CURLOPT_USERAGENT,$this->getUA());
      curl_setopt($ch, CURLOPT_REFERER, 'https://www.rika-firenet.com/web/login');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POST, TRUE);

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
      curl_setopt($ch, CURLOPT_URL, $url);

      $return = curl_exec($ch);
      $curl_errno = curl_errno($ch);
      $curl_error = curl_error($ch);

      curl_close($ch);

      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' return value: \''.$return.'\'');

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

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
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

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      curl_setopt($ch, CURLOPT_URL, $url.$this->getConfiguration('stoveid').'/controls?nocache='.round(microtime(true)*1000,0));
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
      curl_setopt($ch, CURLOPT_POST, TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
      curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded'));

      curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);

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

      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
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
      //return "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0";
      return "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0";

    }

    private function translateSubTypeBinary($value=''){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called params: '.$value);

      $translate=$value;
      if($value==0){
        $translate=__('Off', __FILE__);
      }elseif($value==1){
        $translate=__('On', __FILE__);
      }

      return $translate;
    }

    private function translateConvectionFan1Level($value=''){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called params: '.$value);

      $translate='';
      if($value==0){
        $translate=__('Automatique', __FILE__);
      }else{
        $translate=$value;
      }

      return $translate;
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
              $translate=__('En veille', __FILE__);
              break;
            case 2:
              $translate=__('Commande externe', __FILE__);
              break;
            default:
              $translate=__('Etat inconnu', __FILE__);
          }
          break;
        case 2:
          switch ($statusSubState) {
            case 6:
              $translate=__('Allumage', __FILE__);
              break;
            default:
              $translate=__('Réveil', __FILE__);
          }
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
        case 21:
          switch ($statusSubState) {
            case 11:
            case 12:
              $translate=__('Mode bois', __FILE__);
              break;
            default:
              $translate=__('Etat inconnu', __FILE__);
          }
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

      // Store data
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
    }

    public function controlStove($stovekey='', $_options=array(), $retry=true){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' started');

      $returnValue=false;

      if($retry===false){
        // no retry
        $this->getInfo();
        sleep(3);
        $this->setStove($stovekey, $_options);
        sleep(7);
        $this->getInfo();
        $returnValue=true;
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' retry OFF');
      }else{
        // with retry
        // 1 store target value
        if(is_array($_options)===true){
          if(array_key_exists('message', $_options)===true){
            $targetValue=trim($_options['message']);
          }
        }else{
          $targetValue=trim($_options);
        }

        // 2 define retry
        $timerRetry=array(
          array(15, 30, 45),
          array(60, 60, 60)
        );

        // 3 start to send stove command
        for($i=0;$i<count($timerRetry);$i++){
          // Global retry
          for($j=0;$j<count($timerRetry[$i]);$j++){
            // Retry before ckeck
            $this->getInfo();
            sleep(3);

            $this->setStove($stovekey, $_options);
            sleep($timerRetry[$i][$j]);
          }

          // check
          $this->getInfo();
          $currentValue='';
          $objValue=$this->getCmd(null, $stovekey);
          if(is_object($objValue)){
            $currentValue=$objValue->execCmd();
            if($currentValue==$targetValue){
              log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' ------------ update OK');
              $returnValue=true;
              break;
            }
          }else{
            log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' stovekey: '.$stovekey . ' not an object');
            break;
          }
        }
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__. ' retry ON');
      }

      return $returnValue;
    }

    public function setStove($stovekey='', $_options=array()){
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called stovekey: ' . $stovekey . ' _options: '. json_encode($_options));

      // Step 1
      $valideKeys=array(
        'targetTemperature'    => '',
        'onOff'                => '',
        'operatingMode'        => '',
        'heatingPower'         => '',
        'convectionFan1Active' => '',
        'convectionFan1Area'   => '',
        'convectionFan1Level'  => '',
        'convectionFan2Active' => '',
        'convectionFan2Area'   => '',
        'convectionFan2Level'  => ''
      );
      if(array_key_exists($stovekey, $valideKeys)===false){
        log::add('rikaha', 'debug',  __FUNCTION__ . '()-ln:'.__LINE__.' key: '. $stovekey .' not found in allowed structure');
        throw new Exception(__('Action impossible à réaliser sur votre poêle, merci de consulter vos logs en mode debug',__FILE__));
      }

      // Step 2
      $stoveStructure=array();
      if(is_array($_options)===true){
        if(array_key_exists('message', $_options)===true){
          $stoveStructure[$stovekey]=trim($_options['message']);
        }
      }else{
        $stoveStructure[$stovekey]=trim($_options);
      }

      // Step 3 (required)
      $revision=$this->getCmd(null,'revision');
      if(is_object($revision)){
        $stoveStructure['revision']=$revision->execCmd();
      }
      if(isset($stoveStructure['onOff'])===false){
        $onOff=$this->getCmd(null,'onOff');
        if(is_object($onOff)){
          $stoveStructure['onOff']=$onOff->execCmd();
        }
      }

      // Step 4 Specifics process
      foreach(array_keys($stoveStructure) as $key){
        switch ($key) {
          case 'onOff':
          case 'convectionFan1Active':
          case 'convectionFan2Active':
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
                  // Correction de la conso : ajustement à +25% - a tester
                  $cons=$cons*1.25;

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
    /*
    public function preInsert() {
    }

    public function postInsert() {
    }
    */
    public function preSave() {
      $this->setDisplay("width","300px");
    }
    /*
    public function postSave() {
    }
    */
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
      if (empty($this->getConfiguration('templateid'))) {
        throw new Exception(__('Aucun template sélectionné',__FILE__));
      }
    }

    public function postUpdate() {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');
      $this->getStoveStructure($stoveStructure);

      $newObj=0;
      foreach ($stoveStructure as $key => $value) {
        log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$value['name'].' in process');

        $rikahaCmd = $this->getCmd(null, $value['id']);
        if (!is_object($rikahaCmd)){
          $rikahaCmd=new rikahaCmd();

          $rikahaCmd->setLogicalId($value['id']);
          $rikahaCmd->setName($value['name']);
          $rikahaCmd->setOrder($value['order']);
          $rikahaCmd->setIsHistorized($value['historized']);
          $rikahaCmd->setIsVisible($value['visible']);
          if(trim($value['unite'])!=''){
            $rikahaCmd->setUnite($value['unite']);
          }

          $newObj++;
          log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$value['name'].' created');
        }

        $rikahaCmd->setEqLogic_id($this->id);
        $rikahaCmd->setType($value['type']);
        $rikahaCmd->setSubType($value['subtype']);
        for($i=0;$i<count($value['configuration']);$i++){
          $rikahaCmd->setConfiguration($value['configuration'][$i]['k1'], $value['configuration'][$i]['k2']);
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

      $rikahaCmd = $this->getCmd(null, 'local_tankLevel');
      if (is_object($rikahaCmd)){
        $tankLevel=$rikahaCmd->execCmd();
        if(!is_numeric($tankLevel)){
          $this->cmdSave('local_tankLevel', 0);
        }
      }

      if($newObj>0){
        $this->setStoveTemplate($this->getConfiguration('templateid'));
      }
    }
    /*
    public function preRemove() {
    }

    public function postRemove() {
    }
    */
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
      //log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$selected.' selected value');
      $SO='<option value="...">...</option>';
      for($i=0;$i<count($data);$i++){
        if(trim($selected)==trim($data[$i]['value'])){
          $SO.='<option selected="selected" value="'.$data[$i]['value'].'">'.$data[$i]['label'].'</option>';
          continue;
        }
        $SO.='<option value="'.$data[$i]['value'].'">'.$data[$i]['label'].'</option>';
      }

      //log::add('rikaha', 'debug', __FUNCTION__ . '()-ln: '.$SO);
      return $SO;
    }

    public function toHtml($_version = 'dashboard') {
      log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Called');

      // step 1 get data
      $stoveStructure=array();
      $this->getStoveStructure($stoveStructure);

      $todisplay=array();
      foreach ($stoveStructure as $key => $value) {
        $cmd=$this->getCmd(null, $value['id']);
        if(!is_object($cmd)){
          continue;
        }
        if($cmd->getIsVisible()==0){
          continue;
        }
        if(!is_numeric($cmd->getOrder())){
          continue ;
        }

        if(isset($todisplay[$cmd->getOrder()])===false){
          $todisplay[$cmd->getOrder()]=array();
        }

        if($cmd->getType()=='info'){
          // Info (simple)
          $todisplay[$cmd->getOrder()][]=array(
            'type'       =>$cmd->getType(),
            'subtype'    =>$cmd->getSubType(),
            'logicalid'  =>$cmd->getLogicalId(),
            'id'         =>$cmd->getId(),
            'value'      =>$cmd->execCmd(),
            'unite'      =>$cmd->getUnite(),
            'name'       =>$cmd->getName(),
            'icon'       =>$cmd->getdisplay('icon'),
            'historized' =>$cmd->getIsHistorized()
          );
        }elseif($cmd->getType()=='action'){
          // Action more tricky
          $needed_value="";
          $needed_unite="";
          $needed_logicalid=NULL;
          switch ($cmd->getLogicalId()) {
            case 'local_settargetTemperature':
              $needed_logicalid='targetTemperature';
              break;
            case 'local_setoperatingMode':
              $needed_logicalid='operatingMode';
              break;
            case 'local_setheatingPower':
              $needed_logicalid='heatingPower';
              break;
            case 'local_setonOff':
              $needed_logicalid='onOff';
              break;
            case (string) 'local_setconvectionFan1Active':
              $needed_logicalid='convectionFan1Active';
              break;
            case (string) 'local_setconvectionFan1Area':
              $needed_logicalid='convectionFan1Area';
              break;
            case (string) 'local_setconvectionFan1Level':
              $needed_logicalid='convectionFan1Level';
              break;
            case (string) 'local_setconvectionFan2Active':
              $needed_logicalid='convectionFan2Active';
              break;
            case (string) 'local_setconvectionFan2Area':
              $needed_logicalid='convectionFan2Area';
              break;
            case (string) 'local_setconvectionFan2Level':
              $needed_logicalid='convectionFan2Level';
              break;
            case 'local_setfullTank':
              $needed_value=$this->getConfiguration('tankcapacity');
              break;
          }

          if($needed_logicalid!==NULL){
            $needed_cmd=$this->getCmd(null, $needed_logicalid);
            if(is_object($needed_cmd)){
              $needed_value=$needed_cmd->execCmd();
              $needed_unite=$needed_cmd->getUnite();
            }else{
              log::add('rikaha', 'debug', __FUNCTION__ . '()-ln:'.__LINE__.' Needed logicalid not obj found: ' . $needed_logicalid );
            }
            unset($needed_cmd);
          }

          $todisplay[$cmd->getOrder()][]=array(
            'type'       =>$cmd->getType(),
            'subtype'    =>$cmd->getSubType(),
            'logicalid'  =>$cmd->getLogicalId(),
            'id'         =>$cmd->getId(),
            'value'      =>$needed_value,
            'unite'      =>$cmd->getUnite(),
            'name'       =>$cmd->getName(),
            'icon'       =>$cmd->getdisplay('icon'),
            'historized' =>0,
            'eqlogicid'  =>$cmd->getEqLogic_id()
          );
        }
        unset($cmd);
      }
      unset($stoveStructure);

      // Sort to display
      ksort($todisplay);

      // step 2 display
      $replace = $this->preToHtml($_version);
  		if (!is_array($replace)) {
  			return $replace;
  		}
      $version = jeedom::versionAlias($_version);

      $replace['#local_refresh_id#']='';
      $local_refresh = $this->getCmd(null, 'local_refresh');
      if(is_object($local_refresh)){
        $replace['#local_refresh_id#']=$local_refresh->getId();
      }

      $replace['#local_stovetype#']='';
      $local_stovetype = $this->getCmd(null, 'stoveType');
      if(is_object($local_stovetype)){
        $replace['#local_stovetype#']=$local_stovetype->execCmd();
      }

      $replace['#local_lastupdate#']='';
      $replace['#local_lastupdate_name#']='';
      $local_lastupdate = $this->getCmd(null,'local_lastupdate');
      if(is_object($local_lastupdate)){
        $replace['#local_lastupdate#'] = $local_lastupdate->execCmd();
        $replace['#local_lastupdate_name#'] = $local_lastupdate->getName();
      }

      foreach ($todisplay as $key => $value) {
        for($i=0;$i<count($value);$i++){
          $replaceCmd = array();

          if($value[$i]['type']=='info'){
            $info_template = getTemplate('core', $version, 'info', 'rikaha');

            switch ($value[$i]['logicalid']) {
              case 'operatingMode':
                $replaceInfo['#cmd_value#']=$this->translateOperatingMode($value[$i]['value']);
                break;

              case 'convectionFan1Level':
              case 'convectionFan2Level':
                $replaceInfo['#cmd_value#']=$this->translateConvectionFan1Level($value[$i]['value']);
                break;

              case 'lastSeenMinutes':
                if($value[$i]['value']<2){
                  $value[$i]['value']=__('Joignable', __FILE__);
                }else{
                  $value[$i]['value']=$this->translateUptime($value[$i]['value']*60);
                }
                $replaceInfo['#cmd_value#']=$value[$i]['value'];
                break;

              default:
                if($value[$i]['subtype']=='binary'){
                  $replaceInfo['#cmd_value#']=$this->translateSubTypeBinary($value[$i]['value']);
                }else{
                  $replaceInfo['#cmd_value#']=$value[$i]['value'];
                }
            }

            $replaceInfo['#cmd_id#']=$value[$i]['id'];
            $replaceInfo['#cmd_unite#']=$value[$i]['unite'];
            $replaceInfo['#cmd_name#']=$value[$i]['name'];
            $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
            $replaceInfo['#historized#']="";
            if($value[$i]['historized']==1){
              $replaceInfo['#historized#']="history cursor";
            }

            $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);

          }elseif($value[$i]['type']=='action'){
            switch ($value[$i]['logicalid']) {
              case 'local_settargetTemperature':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                for($j=14;$j<29;$j++){
                  $options[]=array('value'=>$j, 'label'=>$j.$value[$i]['unite']);
                }
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case 'local_setoperatingMode':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                for($j=0;$j<3;$j++){
                  $options[]=array('value'=>$j, 'label'=>$this->translateOperatingMode($j));
                }
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case 'local_setheatingPower':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                for($j=30;$j<105;){
                  $options[]=array('value'=>$j, 'label'=>$j.$value[$i]['unite']);
                  $j+=5;
                }
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case 'local_setonOff':
              case (string) 'local_setconvectionFan1Active':
              case (string) 'local_setconvectionFan2Active':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                $options[]=array('value'=>0, 'label'=>__('Off',__FILE__));
                $options[]=array('value'=>1, 'label'=>__('On',__FILE__));
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case (string) 'local_setconvectionFan1Area':
              case (string) 'local_setconvectionFan2Area':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                for($j=-30;$j<35;){
                  $options[]=array('value'=>$j, 'label'=>$j.$value[$i]['unite']);
                  $j+=5;
                }
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case (string) 'local_setconvectionFan1Level':
              case (string) 'local_setconvectionFan2Level':
                $info_template = getTemplate('core', $version, 'action', 'rikaha');
                $options  = array();
                for($j=0;$j<6;$j++){
                  $options[]=array('value'=>$j, 'label'=>$this->translateConvectionFan1Level($j));
                }
                $replaceInfo['#cmd_id#']=$value[$i]['id'];
                $replaceInfo['#historized#']="";
                if($value[$i]['historized']==1){
                  $replaceInfo['#historized#']="history cursor";
                }
                $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                $replaceInfo['#cmd_action#']='<select style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd">'.$this->HtmlBuildOptions($options, $value[$i]['value']).'</select>';
                $replaceInfo['#cmd_name#']=$value[$i]['name'];
                $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                $replaceInfo['#action#']="change";
                $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                break;

              case 'local_setfullTank':
                if($value[$i]['value']>0){
                  $info_template = getTemplate('core', $version, 'action', 'rikaha');
                  $replaceInfo['#cmd_id#']=$value[$i]['id'];
                  $replaceInfo['#historized#']="";
                  if($value[$i]['historized']==1){
                    $replaceInfo['#historized#']="history cursor";
                  }
                  $replaceInfo['#cmd_icon#']=$value[$i]['icon'];
                  $replaceInfo['#cmd_action#']='<button style="background-color:transparent;" class="'.$value[$i]['id'].'_selectCmd" type="button">'.$value[$i]['name'].'</button>';
                  $replaceInfo['#cmd_name#']="";
                  $replaceInfo['#eqlogicid#']=$value[$i]['eqlogicid'];
                  $replaceInfo['#action#']="click";
                  $replace['#cmd#'] .= template_replace($replaceInfo, $info_template);
                }
                break;
            }
          }
        }
      }

      $replace['#cmd#'] .='';
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
            $this->getEqLogic()->refreshWidget();
            break;
          case 'settargetTemperature':
          case 'setoperatingMode':
          case 'setonOff':
          case 'setheatingPower':
          case 'setconvectionFan1Active':
          case 'setconvectionFan1Area':
          case 'setconvectionFan1Level':
          case 'setconvectionFan2Active':
          case 'setconvectionFan2Area':
          case 'setconvectionFan2Level':
            if($this->getEqLogic()->controlStove($this->getConfiguration('stovekey'), $_options, false)===true){
              $this->getEqLogic()->refreshWidget();
            }
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
