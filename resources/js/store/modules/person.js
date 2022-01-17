import router from '../../router'
const state = {
    person: null,
    people:null
};

const getters = {
    person: () =>  state.person,
    people:() =>state.people
};

const actions = {
    getPerson({commit}, id) {
        axios.get(`/api/people/${id}`).then((res) => {
            commit('setPerson',  res.data.data)
            // this.person = res.data.data;
        });
    },
    getPeople({commit}) {
        axios.get("/api/people").then((res) => {
           commit('setPeople', res.data.data )
            // this.people = res.data.data;
        });
    },
    deletePerson({dispatch},id) {
        axios.delete(`/api/people/${id}`).then((res) => {
            dispatch('getPeople')
            // this.getPeople();
            
        });
    },
    updatePerson({}, data){
        axios.patch(`/api/people/${data.id}`, {  
          
                name: data.name,
                age: data.age,
                job: data.job,
                isMarried: data.isMarried,
            })
        .then(res=>{
           router.push({name: 'person.show', params:{id: data.id}})
        })
    },
    store({}, data ) {
        axios
            .post("/api/people", {
                name: data.name,
                age: data.age,
                job: data.job,
                isMarried: data.isMarried,
            })
            .then((res) => {
                router.push({name: 'person.index'})
                    // this.name = null,
                    // this.age = null,
                    // this.job = null,
                    // this.isMarried = false
                  
            });
    },
};

const mutations = {
    setPerson(state, person){
        state.person = person
    },
    setPeople(state, people){
        state.people = people
    }
}

export default {
    state, getters, actions, mutations
}