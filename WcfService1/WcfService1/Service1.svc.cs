using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace WcfService1
{
    // ПРИМЕЧАНИЕ. Команду "Переименовать" в меню "Рефакторинг" можно использовать для одновременного изменения имени класса "Service1" в коде, SVC-файле и файле конфигурации.
    // ПРИМЕЧАНИЕ. Чтобы запустить клиент проверки WCF для тестирования службы, выберите элементы Service1.svc или Service1.svc.cs в обозревателе решений и начните отладку.
    public class Service1 : IService1
    {
        public string GetData()
        {
            int hours = 24;
            int min = 60;
            int sec = 60;
            int days = (new DateTime(DateTime.Now.Year, 12, 31) - DateTime.Now).Days;
            int hour = (hours - DateTime.Now.Hour);
            int minutes = (min - DateTime.Now.Minute);
            int seconds = (sec - DateTime.Now.Second);
            string rezult = days + ":" + hour + ":" + minutes + ":" + seconds;
            return rezult;
        }
    }
}
