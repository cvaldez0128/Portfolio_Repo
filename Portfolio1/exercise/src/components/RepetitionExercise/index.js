import React from 'react'



export default class Repetition extends React.Component {
    constructor(props) {
        super(props)
        this.state = {repComplete: false, completedRep: 0 }
    }
    render() {
      return (
            <>
            <h1>WHO'S READY FOR SOME PUSH UPS??!</h1>
            <div class="container">
                <p>REPS: {this.state.completedRep}</p>
                <button onClick={() => this.setState((prevState, props) => ({
                    repComplete: true,
                    completedRep: prevState.completedRep + 1,
                }))
                }>COMPLETE REP</button>

                
                <button onClick={() => this.setState((prevState, props) => ({
                    repComplete: false,
                    completedRep: prevState.completedRep = 0,
                }))}>RESET</button>
            </div>
            </>
        )
    }
}