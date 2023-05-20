# Proxy Pattern

#### Kodların Çıktısı:
``` 
Vatandaş: Başbakanla görüşmek istiyorum
Başbakanlık Kalemi: Tabii efendim, sizi başbakana yönlendiriyorum.
Vekil Başbakan: İş isteğinizi dinliyorum



Vatandaş: Başbakanla görüşmek istiyorum
Başbakanlık Kalemi: Tabii efendim, sizi başbakana yönlendiriyorum.
Vekil Başbakan: Derdinizi dinliyorum.
Başbakan: Dinliyorum

```
#### Sınıfların çağırılma durumlarının incelenmesi
```
🙍‍♂️Vatandaş geldi


🙍‍♂️Vatandaş: Başbakanla görüşmek istiyorum

🖊️Başbakanlık Kalemi geldi



🧑‍💼Vekil Başbakan geldi



🫅Gerçek Başbakan geldi


🖊️Başbakanlık Kalemi: Tabii efendim, sizi başbakana yönlendiriyorum.

🖊️Başbakanlık Kalemi gitti


🧑‍💼Vekil Başbakan: İş isteğinizi dinliyorum


******** Yeni Vatandaş Kısmı ********



🙍‍♂️Vatandaş geldi


🙍‍♂️Vatandaş: Başbakanla görüşmek istiyorum

🖊️Başbakanlık Kalemi geldi



🧑‍💼Vekil Başbakan geldi



🫅Gerçek Başbakan geldi


🖊️Başbakanlık Kalemi: Tabii efendim, sizi başbakana yönlendiriyorum.

🖊️Başbakanlık Kalemi gitti


🧑‍💼Vekil Başbakan: Derdinizi dinliyorum.
🫅Başbakan: Dinliyorum

🙍‍♂️Vatandaş gitti



🧑‍💼Vekil Başbakan gitti



🫅Gerçek Başbakan gitti



🙍‍♂️Vatandaş gitti



🧑‍💼Vekil Başbakan gitti



🫅Gerçek Başbakan gitti


```
