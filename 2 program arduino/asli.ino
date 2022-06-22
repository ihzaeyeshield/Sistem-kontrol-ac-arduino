#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>
#include "DHT.h" //library sensor yang telah diimportkan
#define DHTPIN 0     //Pin apa yang digunakan
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

const char* ssid  = "vivo1718";
const char* password  = "solatdulu";
int lamp  = LED_BUILTIN;
int lampu_1 = 5;
int ac_1 = 4;
int lampu_2 = 16;
int ac_2  = 13;
int ldr1 = 12;
int Vo;


void setup() {
  // put your setup code here, to run once:
Serial.begin(115200);
WiFi.begin(ssid,password);
while (WiFi.status() != WL_CONNECTED){
  delay(500);
  Serial.print(".");
  }
Serial.println();
Serial.print("> CONNECTED");
pinMode(lampu_1, OUTPUT);
pinMode(ac_1, OUTPUT);
pinMode(lampu_2, OUTPUT);
dht.begin();

}

void loop() {
  // put your main code here, to run repeatedly:

HTTPClient http;
http.begin("http://192.168.43.251/CoolAdmin-master3/home_sistem.php?wemos=ok");
int httpCode  = http.GET();
if(httpCode > 0){
  Serial.printf("[HTTP]GET... code:%d/n",httpCode);
  if(httpCode ==  HTTP_CODE_OK){
    String json = http.getString();
    Serial.println(json);
    StaticJsonBuffer<200>jsonBuffer;
    JsonObject& root  = jsonBuffer.parseObject(json);
    int lampu1 = root["Lantai_1_Lamp"];
    int ac1  = root["Lantai_1_AC"];
    int lampu2  = root["Lantai_2_Lamp"];
    int ac2  = root["Lantai_2_AC"];
   
    
    if(lampu1  ==  1){digitalWrite(lampu_1,LOW);}
    else{digitalWrite(lampu_1,HIGH);}
    if(ac1 == 1){digitalWrite(ac_1,LOW);}
    else{digitalWrite(ac_1,HIGH);}
    if(lampu2 == 1){digitalWrite(lampu_2,LOW);}
    else{digitalWrite(lampu_2,HIGH);}


    }else{
      Serial.printf("[HTTP]GET.. failed, error: %s/n", http.errorToString(httpCode).c_str());
      } http.end();
  }

    int Vo = analogRead(ldr1);
    float celcius_1 = dht.readTemperature();
    
    if(Vo==0){Serial.println("menyala");}
    else{Serial.println("mati");}

    Serial.println(Vo);
    
    if(celcius_1>29){Serial.println("mati");}
    else{Serial.println("nyala");}
    
  Serial.println(Vo);
  Serial.println(celcius_1);
    
  HTTPClient httpsen;
  httpsen.begin("http://192.168.43.251/CoolAdmin-master3/kirimdata.php?sensor=" + String(Vo)+"&sensor2="+String(celcius_1));
  httpsen.GET();
  httpsen.end();
  
  delay(1000);
}
