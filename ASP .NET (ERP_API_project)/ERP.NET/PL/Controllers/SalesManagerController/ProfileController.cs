using BLL.Entities;
using BLL.Services.SalesManagerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;


namespace PL.Controllers.SalesManagerController
{
    public class ProfileController : ApiController
    {
        // GET api/<controller>
        [Route("api/salesmanager/profile/{id}")]
        [HttpGet]
        public HttpResponseMessage profile(int id)
        {
            var data = ProfileServices.myprofile(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

       
       
    }
}