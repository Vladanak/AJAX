using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.ServiceModel;

namespace ConsoleApp1
{

    class Program
    {
        [ServiceContract]
        public interface IService1
        {
            [OperationContract]
            string GetData();
        }
        static void Main(string[] args)
        {
            Uri tcpUri = new Uri("http://localhost:50169/Service1.svc");
            EndpointAddress address = new EndpointAddress(tcpUri);
            BasicHttpBinding binding = new BasicHttpBinding();
            ChannelFactory<IService1> factory = new ChannelFactory<IService1>(binding, address);
            IService1 serv = factory.CreateChannel();
            while (true)
            {   
                Console.WriteLine("До нового года осталось:");
                Console.WriteLine(serv.GetData());
                System.Threading.Thread.Sleep(1000);
                Console.Clear();
            }
        }
    }
}
